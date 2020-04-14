<?php

namespace Roseblade\DataExtension;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;

class SiteConfigExtension extends DataExtension
{
    private static $has_one     = [
        'Logo'          => 'SilverStripe\Assets\Image'
	];
	
    private static $owns        = [
        'Logo'
    ];

    private static $db = array(
        'FriendlyName'  => 'Varchar(255)',
        'LegalName'		=> 'Varchar(255)',
        'CompanyNumber'	=> 'Varchar(15)'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab("Root.Business", [
            $logoField   = new UploadField("Logo", "Logo"),
            new TextField("FriendlyName", "Friendly Name (e.g. what do people know you as?)"),
            new TextField("LegalName", "Legal Entity Name"),
            new TextField("CompanyNumber", "Company Number")
        ]);

        $logoField
            ->setFolderName('resources')
            ->getValidator()->setAllowedExtensions('image');
    }
}