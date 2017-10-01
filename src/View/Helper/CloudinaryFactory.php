<?php
/**
 * Zend framework Cloudinary integration
 *
 * @link        https://github.com/renat-magadiev/cloudinary-module
 * @copyright   Copyright (c) 2017 Renat MAGADIEV (https://www.magadiev.cz)
 * @license     MIT License https://github.com/renat-magadiev/cloudinary-module/blob/master/LICENSE
 */

namespace CloudinaryModule\View\Helper;
use Zend\ServiceManager\AbstractPluginManager;

class CloudinaryFactory
{
    public function __invoke($container)
    {
        return new \CloudinaryModule\View\Helper\Cloudinary($container->get(\CloudinaryModule\Cloudinary::class));
    }
}