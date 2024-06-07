<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/smart_campaign_suggest_service.proto

namespace Google\Ads\GoogleAds\V16\Services\SmartCampaignSuggestionInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of locations.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.SmartCampaignSuggestionInfo.LocationList</code>
 */
class LocationList extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Locations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.LocationInfo locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $locations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V16\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $locations
     *           Required. Locations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\SmartCampaignSuggestService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Locations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.LocationInfo locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Required. Locations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v16.common.LocationInfo locations = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V16\Common\LocationInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V16\Common\LocationInfo::class);
        $this->locations = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocationList::class, \Google\Ads\GoogleAds\V16\Services\SmartCampaignSuggestionInfo_LocationList::class);

