<?php

declare(strict_types=1);

namespace Yii2\Extensions\FilePond\Asset;

use yii\web\AssetBundle;

/**
 * Asset bundle for the filepond image transform plugin, mainly used for publishing assets.
 */
final class FilePondImageTransformPlugin extends AssetBundle
{
    /**
     * {@inheritDoc}
     */
    public $sourcePath = '@npm/filepond-plugin-image-transform';

    public function init(): void
    {
        parent::init();

        $this->js = YII_ENV === 'prod'
            ? ['dist/filepond-plugin-image-transform.min.js'] : ['dist/filepond-plugin-image-transform.js'];

        $this->publishOptions['only'] = $this->js;
    }

    /**
     * {@inheritDoc}
     *
     * @phpstan-var array<array-key, mixed>
     */
    public $depends = [
        FilePondAsset::class,
    ];
}
