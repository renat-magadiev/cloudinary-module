<?php
/**
 * Zend framework Cloudinary integration
 *
 * @link        https://github.com/renat-magadiev/cloudinary-module
 * @copyright   Copyright (c) 2017 Renat MAGADIEV (https://www.magadiev.cz)
 * @license     MIT License https://github.com/renat-magadiev/cloudinary-module/blob/master/LICENSE
 */

namespace CloudinaryModule\View\Helper;

use Zend\View\Helper\AbstractHelper;

class Cloudinary extends AbstractHelper
{
    /**
     * @var \CloudinaryModule\Cloudinary
     */
    private $cloudinary;

    public function __construct(\CloudinaryModule\Cloudinary $cloudinary)
    {
        $this->cloudinary = $cloudinary;
    }


    public function __invoke(string $file, array $options = [])
    {
        return $this->cloudinary->getLink($file, $options);
    }
}