<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\MsiLumaInventorySampleData\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\SampleData\Context as SampleDataContext;


/**
 * Class InstallConfigurableSampleData
 * @package Magento\ConfigurableSampleDataVenia\Setup\Patch\Data
 */
class InstallInventory implements DataPatchInterface
{

    /** @var ModuleDataSetupInterface  */
    protected $moduleDataSetup;


    public function __construct(
        SampleDataContext $sampleDataContext,
        ModuleDataSetupInterface $moduleDataSetup

       )
    {
        $this->moduleDataSetup = $moduleDataSetup;

    }


    public function apply()
    {


    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [//SetSession::class

        ];
    }

}