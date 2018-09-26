<?php

/*
 * LimeSurvey
 * Copyright (C) 2007-2015 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

namespace LimeSurvey\ExtensionInstaller;

/**
 * @since 2018-09-26
 * @author Olle Haerstedt
 */
abstract class VersionFetcher
{
    /**
     * Set source to fetch version information. Can be URL to REST API, git repo, etc.
     * @param string $source
     */
    abstract public function setSource($source);

    /**
     * Get latest version for this extension.
     * @return string Semantic versioning string.
     */
    abstract public function getLatestVersion();
}
