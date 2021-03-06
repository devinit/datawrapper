<?php



/**
 * Skeleton subclass for representing a row from the 'plugin' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.datawrapper
 */
class Plugin extends BasePlugin {

    public function getName() {
        return $this->getId();
    }

    public function getClassName() {
        return 'DatawrapperPlugin_' . str_replace(' ', '', ucwords(str_replace('-', ' ', $this->getName())));
    }

    public function getPath() {
        return ROOT_PATH . 'plugins/' . $this->getName() . '/';
    }

    private $packageInfo;

    public function getInfo() {
        if (!isset($this->packageInfo)) {
            if (!file_exists($this->getPath() . 'package.json')) {
                return false;
            }
            $this->packageInfo = json_decode(
                file_get_contents($this->getPath() . 'package.json')
            , true);
            if (!isset($this->packageInfo['dependencies'])) $this->packageInfo['dependencies'] = array();
        }
        return $this->packageInfo;
    }

    public function getDependencies() {
        $info = $this->getInfo();
        if (isset($info['dependencies'])) {
            return $info['dependencies'];
        }
        return false;
    }

    /*
     * return plugin repository
     */
    public function getRepository() {
        $meta = $this->getInfo();
        if (isset($meta['repository'])) {
            return $meta['repository'];
        }
        return false;
    }

    public function __toString() {
        return $this->getName();
    }

    public function getLastModifiedTime($as_timestamp = false) {
        if (isset($this->__lastModTime)) return $this->__lastModTime;
        $lastm = 0;
        $path = ROOT_PATH . 'plugins/' . $this->getId() . '/';
        $files = array_filter(glob('{'.$path.'*,'.$path.'*/*,'.$path.'*/*/*}', GLOB_BRACE));
        foreach ($files as $file) {
            if (strpos($file, '/locale/') > 0) continue; // ignore locales file
            $lm = filemtime($file);
            if ($lm > $lastm) $lastm = $lm;
        }
        $this->__lastModTime = strftime('%F %H:%M:%S', $lastm);
        $this->__lastModTimeTS = $lastm;
        return $as_timestamp ? $this->__lastModTimeTS : $this->__lastModTime;
    }

} // Plugin
