/// <reference types="vite/client" />

interface ImportMetaEnv {
  readonly VITE_API_KEY: string; // for Vite
  // readonly REACT_APP_API_KEY: string; // for CRA
}

interface ImportMeta {
  readonly env: ImportMetaEnv;
}