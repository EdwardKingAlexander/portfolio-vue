import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig(({ mode }) => {
  const env = loadEnv(mode, process.cwd(), '');
  const host = env.VITE_DEV_SERVER_HOST ?? 'localhost';
  const port = Number(env.VITE_DEV_SERVER_PORT ?? 5173);
  const useHttps = env.VITE_DEV_SERVER_HTTPS === 'true';
  const hmrProtocol = env.VITE_DEV_SERVER_HMR_PROTOCOL ?? (useHttps ? 'wss' : 'ws');
  const originProtocol = useHttps ? 'https' : 'http';

  return {
    plugins: [
      laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
      }),
      vue(),
    ],
    resolve: {
      alias: {
        '@': '/resources/js',
      },
    },
    server: {
      host,
      port,
      https: useHttps,
      cors: true,
      origin: `${originProtocol}://${host}:${port}`,
      hmr: {
        host,
        port,
        protocol: hmrProtocol,
      },
    },
  };
});
