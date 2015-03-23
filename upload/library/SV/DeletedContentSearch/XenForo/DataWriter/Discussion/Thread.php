<?php

class SV_DeletedContentSearch_XenForo_DataWriter_Discussion_Thread extends XFCP_SV_DeletedContentSearch_XenForo_DataWriter_Discussion_Thread
{
    protected function _indexForSearch()
    {
        if ($this->isUpdate() && $this->isChanged('discussion_state'))
        {
            $this->_insertIntoSearchIndex();
        }
        else
        {
            parent::_indexForSearch();
        }
    }
}