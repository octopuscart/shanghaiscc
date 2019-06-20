<?php

class Sitemap extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // We load the url helper to be able to use the base_url() function
        $this->load->helper('url');

        $this->load->model('SitemapModel');

        // Array of some articles for demonstration purposes
    }

    /**
     * Generate a sitemap index file
     * More information about sitemap indexes: http://www.sitemaps.org/protocol.html#index
     */
    public function index() {
        $this->SitemapModel->add(base_url(), NULL, 'monthly', 1);
        $this->SitemapModel->add(base_url('contact-us'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('booking'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('shopNow'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('lookbook'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('stylingTips'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('faqs'), NULL, 'monthly', 0.9);
        $this->SitemapModel->add(base_url('stylingTipsTag'), NULL, 'monthly', 0.9);
        $query = $this->db->get('style_tips');
        $articles = $query->result_array();
        foreach ($articles as $article) {
            $location = base_url("styleTips/" . $article['id'] . '/' . $article['title']);
            $this->SitemapModel->add($location, date('Y-m-d', time()), "monthly", 0.7);
        }
        $this->SitemapModel->output();
    }

    /**
     * Generate a sitemap both based on static urls and an array of urls
     */
    public function general() {
        $sitemap = [
            array('title' => 'Home', 'url' => base_url(), 'suburl' => array()),
            array('title' => 'Shop Now', 'url' => base_url('ShopNow'),
                'suburl' => [array('title' => "Men's Suits", 'url' => base_url('Products/CustomSuits'))]
            ),
            array('title' => 'Look Book', 'url' => base_url('lookbook'),
                'suburl' => [
                    array('title' => "Men's Custom Suits", 'url' => base_url('lookbook/MensCustomSuits')),
                    array('title' => "Women's Custom Suits", 'url' => base_url('lookbook/WomensCustomSuits')),
                ]
            ),
            array('title' => 'Book A Fitting', 'url' => base_url('booking'), 'suburl' => array()),
            array('title' => 'Styling Tips', 'url' => base_url('stylingTips'), 'suburl' => array()),
            array('title' => 'Contact Us', 'url' => base_url('contact-us'), 'suburl' => array()),
            array('title' => "FAQ's", 'url' => base_url('faqs'), 'suburl' => array()),
        ];

        $blog = [];
        $query = $this->db->get('style_tips');
        $articles = $query->result_array();

        $data['sitemap'] = $sitemap;
        $data['blog'] = $articles;

        $this->load->view('Pages/sitemap', $data);
    }

    /**
     * Generate a sitemap only on an array of urls
     */
    public function articles() {
        $query = $this->db->get('style_tips');
        $articles = $query->result_array();
        foreach ($articles as $article) {
            $location = base_url("styleTips/" . $article['id'] . '/' . $article['title']);
            $this->SitemapModel->add($location, date('Y-m-d', time()), "monthly", 0.7);
        }
        $this->SitemapModel->output();
    }

}
