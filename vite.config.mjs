import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { glob } from 'glob';

/**
 * Get Files from a directory
 * @param {string} query
 * @returns array
 */
function GetFilesArray(query) {
  return glob.sync(query);
}

// Page JSON Files
const jsonData = GetFilesArray('resources/data/**/*.json');

// Processing JS Files
const CoreJsFiles = GetFilesArray('resources/assets/**/*.js');

// Processing Core, Themes & Pages Scss Files
const CoreScssFiles = GetFilesArray('resources/assets/scss/**/!(_)*.scss');

//const CoreSvgFiles = GetFilesArray('public/deewid/svg/**/*.svg');

// Images & Fonts Files
//const LibsImagesFiles = GetFilesArray('resources/assets/images/**/*.+(ico|png|jpg|jpeg|gif|svg)');
//const LibsFontsFiles = GetFilesArray('resources/assets/fonts/**/*.+(woff|woff2|ttf|eot|otf|svg');

export default defineConfig({
  plugins: [
    laravel({
      input: [
        ...jsonData,
        ...CoreJsFiles,
        ...CoreScssFiles,
        //...CoreSvgFiles
        //...LibsImagesFiles,
        //...LibsFontsFiles,
        'tailwind.config.js'
      ],
      refresh: true
    })
  ],
  build: {
    parallel: false
  }
});
