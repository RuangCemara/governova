<?php
/**
 * @file plugins/themes/governovatheme/GovernovaThemePlugin.inc.php
 */

import('lib.pkp.classes.plugins.ThemePlugin');

class GovernovaThemePlugin extends ThemePlugin {
    /**
     * Initialize theme
     */
    public function init() {
        // Set parent theme to default
        $this->setParent('defaultthemeplugin');

        parent::init();

        // Add custom stylesheet
        $this->addStyle('governova-styles', 'styles/index.css');

        // Add custom JavaScript
        $this->addScript('governova-scripts', 'js/main.js');
    }

    /**
     * Get display name
     * @return string
     */
    public function getDisplayName() {
        return __('plugins.themes.governovatheme.displayName');
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription() {
        return __('plugins.themes.governovatheme.description');
    }
}
