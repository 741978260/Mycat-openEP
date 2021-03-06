<?php
// **********************************************************************
//
// Copyright (c) 2003-2013 ZeroC, Inc. All rights reserved.
//
// This copy of Ice is licensed to you under the terms described in the
// ICE_LICENSE file included in this distribution.
//
// **********************************************************************
//
// Ice version 3.5.1
//
// <auto-generated>
//
// Generated from file `Metrics.ice'
//
// Warning: do not edit this file.
//
// </auto-generated>
//


namespace
{
    require_once 'Ice/Metrics.php';
}

namespace IceMX
{
    if(!class_exists('\\IceMX\\TopicMetrics'))
    {
        class TopicMetrics extends \IceMX\Metrics
        {
            public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $published=0, $forwarded=0)
            {
                parent::__construct($id, $total, $current, $totalLifetime, $failures);
                $this->published = $published;
                $this->forwarded = $forwarded;
            }

            public static function ice_staticId()
            {
                return '::IceMX::TopicMetrics';
            }

            public function __toString()
            {
                global $IceMX__t_TopicMetrics;
                return IcePHP_stringify($this, $IceMX__t_TopicMetrics);
            }

            public $published;
            public $forwarded;
        }

        class TopicMetricsPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceMX::TopicMetrics', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceMX::TopicMetrics', $facet);
            }
        }

        $IceMX__t_TopicMetrics = IcePHP_defineClass('::IceMX::TopicMetrics', '\\IceMX\\TopicMetrics', -1, false, false, $IceMX__t_Metrics, null, array(
            array('published', $IcePHP__t_long, false, 0),
            array('forwarded', $IcePHP__t_long, false, 0)));

        $IceMX__t_TopicMetricsPrx = IcePHP_defineProxy($IceMX__t_TopicMetrics);
    }
}

namespace IceMX
{
    if(!class_exists('\\IceMX\\SubscriberMetrics'))
    {
        class SubscriberMetrics extends \IceMX\Metrics
        {
            public function __construct($id='', $total=0, $current=0, $totalLifetime=0, $failures=0, $queued=0, $outstanding=0, $delivered=0)
            {
                parent::__construct($id, $total, $current, $totalLifetime, $failures);
                $this->queued = $queued;
                $this->outstanding = $outstanding;
                $this->delivered = $delivered;
            }

            public static function ice_staticId()
            {
                return '::IceMX::SubscriberMetrics';
            }

            public function __toString()
            {
                global $IceMX__t_SubscriberMetrics;
                return IcePHP_stringify($this, $IceMX__t_SubscriberMetrics);
            }

            public $queued;
            public $outstanding;
            public $delivered;
        }

        class SubscriberMetricsPrxHelper
        {
            public static function checkedCast($proxy, $facetOrCtx=null, $ctx=null)
            {
                return $proxy->ice_checkedCast('::IceMX::SubscriberMetrics', $facetOrCtx, $ctx);
            }

            public static function uncheckedCast($proxy, $facet=null)
            {
                return $proxy->ice_uncheckedCast('::IceMX::SubscriberMetrics', $facet);
            }
        }

        $IceMX__t_SubscriberMetrics = IcePHP_defineClass('::IceMX::SubscriberMetrics', '\\IceMX\\SubscriberMetrics', -1, false, false, $IceMX__t_Metrics, null, array(
            array('queued', $IcePHP__t_int, false, 0),
            array('outstanding', $IcePHP__t_int, false, 0),
            array('delivered', $IcePHP__t_long, false, 0)));

        $IceMX__t_SubscriberMetricsPrx = IcePHP_defineProxy($IceMX__t_SubscriberMetrics);
    }
}
?>
