<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Configuration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function migration() {


        if ($this->db->table_exists('style_tips')) {
            // table exists
        } else {
            $this->db->query('CREATE TABLE IF NOT EXISTS `style_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `tag` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;');
        }

        $style_tips = array(
            array('id' => '1', 'title' => 'Modern Fit Suit', 'description' => 'If you don’t think you can pull off the slim fit suit just yet, but want to nevertheless exude a heightened sartorial sensibility, by all means consider the modern fit suit. It hovers squarely in the realm between slim fit and classic fit, and thereby delivers a tight look with breathing room to spare. If you get the material and the accessories right then you can make this work for just about any occasion.', 'image' => 'mfs.jpg', 'tag' => 'Suits, Modern Suits'),
            array('id' => '2', 'title' => 'Single Breasted Suit', 'description' => 'Among men’s suit types, the single breasted suit is the most ubiquitous. The easiest way to spot one is to look for the inclusion of either one, two or three buttons along the seam, or just observe what about 99% of professional men wear to work to every day. By virtue of the single row of buttons, a single breasted suit usually exudes a narrower and tighter appearance. These suits are most frequently paired with notch lapels.

There are firm codes of conduct when it comes to buttoning a single breasted suit. For a one-button suit, you should button when standing and unbutton when sitting. For a two-button suit, you should button the top button when standing, unbutton it when sitting, and never fasten the lower button. When it’s a rare three-button suit, the top button is optional, the middle button is always fastened (whether you’re sitting or standing), and the lower button is never fastened.', 'image' => 'sbs.jpg', 'tag' => 'Suits, Style Suits'),
            array('id' => '3', 'title' => 'Double Breasted Suit', 'description' => 'In contrast to the single breasted men’s suit type, the double breasted suit includes additional buttons on either side of the jacket for aesthetic purposes. The total number of buttons ranges from four to eight and typically lands at six. As a result of the extra buttons, the focal point drifts from the seam toward the sides to create the illusion of a wider frame. Whether such optical trickery is beneficial usually boils down to body type, whereas stockier men are probably better off sticking with a single breasted suit.

While previously relegated to formal events, the double breasted suit is catching on among fashion-forward men, especially in Europe. The suit works great with a variety of colours and most commonly features peak lapels on the jacket. As for the rules of buttoning a double breasted men’s jacket, they’re quite simple: no matter how many buttons there are, always leave the bottom button unfastened and the top button(s) fastened whether sitting or standing.', 'image' => 'dbs.jpg', 'tag' => 'Suits, Style suits'),
            array('id' => '4', 'title' => 'Unstructured Blazer', 'description' => 'Some men think interior padding and stylish blazers are invariably part of the same package. However, the men’s unstructured blazer is here to change such preconceived notions. By removing the interior padding, the unstructured blazer breaks free from conformity and constraint to deliver a soft fit and somewhat laid back aesthetic.

Frequently composed of a single layer of material, the unstructured blazer makes for ideal spring or summertime wear because it takes weight off the body. That said, men should proceed with caution because there can be a fine line between casual and unkempt. The idea is to find an unstructured blazer that captures your sartorial style and fun-loving spirit in equal measure. Keep it loose, but not too loose.', 'image' => 'usb.jpg', 'tag' => 'Suits, Blazer'),
            array('id' => '5', 'title' => 'Lapel Button-hole', 'description' => 'Some men think interior padding and stylish blazers are invariably part of the same package. However, the men’s unstructured blazer is here to change such preconceived notions. By removing the interior padding, the unstructured blazer breaks free from conformity and constraint to deliver a soft fit and somewhat laid back aesthetic.

Frequently composed of a single layer of material, the unstructured blazer makes for ideal spring or summertime wear because it takes weight off the body. That said, men should proceed with caution because there can be a fine line between casual and unkempt. The idea is to find an unstructured blazer that captures your sartorial style and fun-loving spirit in equal measure. Keep it loose, but not too loose.', 'image' => 'lbh.jpg', 'tag' => 'Suits, Lapel'),
            array('id' => '6', 'title' => 'Unlined vs. Half-lined vs. Fully-lined Suit Jacket Linings', 'description' => 'A natural fiber lining on the inside of a suit jacket is a sign of quality.

Bemberg is a natural form of rayon made from cotton linter.  It\'s considered the king of linings as it\'s durable, relatively inexpensive, breathable, and easy to find.

Silk is a luxury fabric and therefore expensive. Although sought after for suits, especially custom, I don\'t recommend it is difficult to clean and impossible to fix if torn (you need to replace it).  It is breathable though, so an option for hot weather.

Polyester or oil based rayon linings are common in low-cost and mass manufactured jackets – avoid them as they are the least breathable.

The inner jacket lining is usually color-coordinated with the suit fabric.  If you decide to go with a contrasting color, it makes the suit more casual (although you can keep it buttoned and no one will know). A lining provides a suit jacket with durability and helps to maintain its line.

An unlined suit jacket is bound to cost more than a suit that is completely lined.  Why?  Labor and skill – unlined jackets are rare and the artist building the coat will need to ensure his inner stitching is beautiful as the suit jacket\'s owner will be able to see it.', 'image' => 'lining.jpg', 'tag' => 'suits, Lining'),
            array('id' => '7', 'title' => 'Patch Pocket Blazer', 'description' => 'A patch pocket is one that’s been made from a separate piece of cloth and then sewn on to the outside of your sports jacket or blazer. Like the unstructured blazer, patch pockets are a great way to join casual style with personal flair. A quick pointer: if you’re going with patch pockets, it should be all the exterior pockets that are patched and not just one or two. Also, make sure everything matches up in terms of colour or pattern.', 'image' => 'patch.jpg', 'tag' => 'suits, Pockets')
        );

        foreach ($style_tips as $key => $value) {
            print_r($value);
            $this->db->insert('style_tips', $value);
        }

        echo "Success";
    }

}
