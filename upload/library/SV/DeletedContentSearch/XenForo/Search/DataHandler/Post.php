<?php

class SV_DeletedContentSearch_XenForo_Search_DataHandler_Post extends XFCP_SV_DeletedContentSearch_XenForo_Search_DataHandler_Post
{
    protected function _insertIntoIndex(XenForo_Search_Indexer $indexer, array $data, array $parentData = null)
    {
        $not_visible = false;
        if ($data['message_state'] != 'visible')
        {
            $not_visible = true;
            $data['message_state'] = 'visible';
        }
        if (isset($parentData['discussion_state']) && $parentData['discussion_state'] != 'visible')
        {
            $not_visible = true;
            $parentData['discussion_state'] = 'visible';
        }
        //if ($not_visible)
        //{
        //    $indexer = new SV_DeletedContentSearch_Search_Indexer($indexer, array(
        //        'not_visible' => $not_visible
        //    ));
        //}
        parent::_insertIntoIndex($indexer, $data, $parentData);
    }
}