<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\MsiInventorySampleDataLuma\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\SampleData\Context as SampleDataContext;
use Magento\MsiInventorySampleData\Model\InstallInventoryData as SampleData;


/**
 * Class InstallLumaInventory
 * @package Magento\MsiInventorySampleDataLuma\Setup\Patch\Data
 */
class InstallLumaInventory implements DataPatchInterface
{

    /** @var ModuleDataSetupInterface  */
    protected $moduleDataSetup;

    /**
     * @var \Magento\Framework\Setup\SampleData\FixtureManager
     */
    protected $fixtureManager;

    /** @var SampleData\  */
    protected $sampleData;

    /**
     * InstallLumaInventory constructor.
     * @param SampleDataContext $sampleDataContext
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param SampleData $sampleData
     */
    public function __construct(
        SampleDataContext $sampleDataContext,
        ModuleDataSetupInterface $moduleDataSetup,
        SampleData $sampleData
       )
    {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->fixtureManager = $sampleDataContext->getFixtureManager();
        $this->sampleData = $sampleData;
    }


    public function apply()
    {
        $this->sampleData->addInventory(['Magento_MsiInventorySampleDataLuma::fixtures/luma_msi_inventory.csv']);
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