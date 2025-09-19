<template>
  <div class="max-w-2xl mx-auto bg-gray-200 p-6 rounded-lg shadow m-6">
    <h2 class="text-xl font-semibold mb-4">Upload and Convert .txt File</h2>

    <input
      type="file"
      accept=".txt"
      @change="handleFileUpload"
      class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border-0
             file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
    />

    <div v-if="convertedText" class="mt-6">
      <button
        @click="downloadFile"
        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded"
      >
        Download Tab-Delimited File
      </button>

      <p class="text-sm text-gray-500 mt-2">Parsed preview:</p>
      <pre class="bg-gray-100 text-xs p-3 mt-2 overflow-auto max-h-64 whitespace-pre-wrap">{{ convertedText }}</pre>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';

export default {
  name: 'TextToTabConverter',
  setup() {
    const convertedText = ref('');

    const handleFileUpload = (event) => {
      const file = event.target.files[0];
      if (!file) return;

      const reader = new FileReader();

      reader.onload = (e) => {
        const rawText = e.target.result;

        const lines = rawText
          .replace(/\r\n/g, '\n') // Normalize line endings
          .split('\n')
          .filter(line => line.trim() !== '');

        const parsedLines = lines.map(line => {
          // Replace any group of 2+ spaces/tabs with a single tab
          return line.trim().replace(/[ \t]{2,}/g, '\t');
        });

        convertedText.value = parsedLines.join('\n');
      };

      reader.readAsText(file);
    };

    const downloadFile = () => {
      const blob = new Blob([convertedText.value], { type: 'text/plain;charset=utf-8' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'converted-tab-delimited.txt';
      a.click();
      URL.revokeObjectURL(url);
    };

    return {
      convertedText,
      handleFileUpload,
      downloadFile,
    };
  },
};
</script>
