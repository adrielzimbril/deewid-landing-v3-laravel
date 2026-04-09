<?php

// Custom Config
// -------------------------------------------------------------------------------------
//! IMPORTANT: Make sure you clear the browser local storage In order to see the config changes in the template.
//! To clear local storage: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).

return [
  'custom' => [
    'myLayout' => 'admin',      // Options[String]: vertical(default), horizontal

    'myStyle' => 'light',               // Options[String]: light(default), dark & system mode

    'menuFixed'     => true,
    // options[Boolean]: true(default), false // Layout(menu) Fixed (Only for vertical Layout)
    'menuCollapsed' => false,
    // options[Boolean]: false(default), true // Show menu collapsed, (Only for vertical Layout)
    'headerType'    => 'fixed',         // options[String]: 'static', 'fixed' (for horizontal layout only)
  ],
];
