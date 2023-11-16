<?php

declare(strict_types=1);

namespace Yii\FilePond\Asset\Prod;

use yii\web\AssetBundle;

/**
 * Asset bundle for the filepond image preview plugin in production mode, mainly used for publishing assets.
 */
final class FilePondImagePreviewPlugin extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-preview';

    /**
     * {@inheritDoc}
     */
    public $css = [
        'dist/filepond-plugin-image-preview.min.css',
    ];

    /**
     * {@inheritDoc}
     */
    public  $js = [
        'dist/filepond-plugin-image-preview.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $publishOptions = [
        'only' => [
            'dist/filepond-plugin-image-preview.min.css',
            'dist/filepond-plugin-image-preview.min.js',
        ],
    ];
}