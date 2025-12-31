<?php
/**
 * @file plugins/themes/governovatheme/GovernovaThemePlugin.inc.php
 * Hardcoded version - no locale dependency
 */

import('lib.pkp.classes.plugins.ThemePlugin');

class GovernovaThemePlugin extends ThemePlugin {
    /**
     * Initialize theme
     */
    public function init() {
        // Set parent theme to default
        $this->setParent('defaultthemeplugin');

        // Add custom stylesheet
        $this->addStyle('governova-styles', 'styles/index.css');

        // Add custom JavaScript
        $this->addScript('governova-scripts', 'js/main.js');
    }

    /**
     * Get display name (hardcoded)
     * @return string
     */
    public function getDisplayName() {
        return 'Governova Theme';
    }

    /**
     * Get description (hardcoded)
     * @return string
     */
    public function getDescription() {
        return 'Custom theme for Governova Journal - Journal of Governance and Public Innovation';
    }
}
