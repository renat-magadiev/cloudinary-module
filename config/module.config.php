<?php
/**
 * Zend framework Cloudinary integration
 *
 * @link        https://github.com/renat-magadiev/cloudinary-module
 * @copyright   Copyright (c) 2017 Renat MAGADIEV (https://www.magadiev.cz)
 * @license     MIT License https://github.com/renat-magadiev/cloudinary-module/blob/master/LICENSE
 */

namespace CloudinaryModule;

return array(
    'service_manager' => array(
        'factories' => array(
            Cloudinary::class => CloudinaryFactory::class,
        ),
    ),
);