<?php

class SV_NewsFeedPruning_XenForo_Model_NewsFeed extends XFCP_SV_NewsFeedPruning_XenForo_Model_NewsFeed
{
    public function deleteOldNewsFeedItems($dateCut = null)
    {
        if ($dateCut === null)
        {
            $options = XenForo_Application::getOptions();
            $expiryTime = $options->sv_newsFeedExpiry * 86400;
            $dateCut = XenForo_Application::$time - $expiryTime;
        }
        parent::deleteOldNewsFeedItems($dateCut);
    }
}
