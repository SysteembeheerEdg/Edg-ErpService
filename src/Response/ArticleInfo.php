<?php
/**
 * ArticleInfo
 *
 * @copyright Copyright © 2017 Bold Commerce BV. All rights reserved.
 * @author    dev@boldcommerce.nl
 */

namespace Bold\PIMService\Response;


class ArticleInfo
{
    /**
     * @var \Bold\PIMService\DataModel\ArticleInfo[]
     */
    protected $articles = [];
    protected $result;

    public function __construct($result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    /**
     * @return \Bold\PIMService\DataModel\ArticleInfo[]
     */
    public function getArticles()
    {
        return $this->articles;
    }
    
    /**
     * @param \Bold\PIMService\DataModel\ArticleInfo $article
     * @return $this
     */
    public function addArticle(\Bold\PIMService\DataModel\ArticleInfo $article)
    {
        $this->articles[] = $article;
        return $this;
    }
}