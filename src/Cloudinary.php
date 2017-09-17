<?php
/**
 * Zend framework Cloudinary integration
 *
 * @link        https://github.com/renat-magadiev/cloudinary-module
 * @copyright   Copyright (c) 2017 Renat MAGADIEV (https://www.magadiev.cz)
 * @license     MIT License https://github.com/renat-magadiev/cloudinary-module/blob/master/LICENSE
 */

namespace CloudinaryModule;

use Cloudinary\Uploader;

class Cloudinary
{
    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        \Cloudinary::config($config);
    }


    /**
     * @param $file
     * @param $options
     * @return array
     */
    public function upload(string $file, array $options = []): array
    {
        return Uploader::upload($file, $options);
    }


    /**
     * @param string $file
     * @param array  $options
     * @return mixed|null|string
     */
    public function getLink(string $file, array $options = []): string
    {
        return cloudinary_url($file, $options);
    }
}