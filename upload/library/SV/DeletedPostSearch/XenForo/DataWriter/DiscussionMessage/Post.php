<?php

class SV_DeletedPostSearch_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_SV_DeletedPostSearch_XenForo_DataWriter_DiscussionMessage_Post
{
    protected function _indexForSearch()
    {
        if ($this->isUpdate() && $this->isChanged('message_state'))
        {
            $this->_insertOrUpdateSearchIndex();
        }
        else
        {
            parent::_indexForSearch();
        }
    }
}