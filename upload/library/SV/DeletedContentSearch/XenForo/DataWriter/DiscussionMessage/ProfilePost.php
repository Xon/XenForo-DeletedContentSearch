<?php

class SV_DeletedContentSearch_XenForo_DataWriter_DiscussionMessage_ProfilePost extends XFCP_SV_DeletedContentSearch_XenForo_DataWriter_DiscussionMessage_ProfilePost
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