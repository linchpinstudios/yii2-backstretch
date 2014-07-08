<?php
/**
 * @link http://www.linchpinstudios.com/
 * @copyright Copyright (c) 2014 Linchpin Studios LLC
 * @license http://opensource.org/licenses/MIT
 */

namespace linchpinstudios\backstretch;

use Yii;

/**
 * An Icon Bar provides a menu to quickly navigate an app. Use the Icon Bar 
 * horizontally or vertically, with the labels below the icons or to the 
 * right. Have it your way.
 *
 * For example,
 *
 * ```php
 * // a button group using Dropdown widget
 * echo Backstrech::widget([
 *     'duration' => 3000,
 *     'fade' => 750,
 *     'clickEvent' => false,
 *     'images' => [
 *         'item' => ['image' => http://dl.dropbox.com/u/515046/www/outside.jpg'],
 *         'item' => ['image' => 'http://dl.dropbox.com/u/515046/www/garfield-interior.jpg'],
 *         'item' => ['image' => 'http://dl.dropbox.com/u/515046/www/cheers.jpg'],
 *     ],
 * ]);
 * ```
 * @see http://srobbin.com/jquery-plugins/backstretch/
 * @author Josh Hagel <joshhagel@linchpinstudios.com>
 * @since 0.1
 */
 
 class Backstrech extends \yii\base\Widget
 {
    /**
     * @var intiger the duration of the slideshow in ms
     */
     public $duration = 3000;
    /**
     * @var intiger the duration of the transition in ms
     */
     public $fade = 750;
    /**
     * @var array images to dispaly
     */
     public $images = [];
    /**
     * @var string the blog to apply to
     */
     public $block = '';
    /**
     * @var boolean 
     */
     public $clickEvent = false;
    
    
    /**
     * run function.
     * 
     * @access public
     * @return void
     */
    public function run()
    {
        $view = $this->getView();
        $js = [];
        BackstrechAssets::register($view);
        
        if($this->clickEvent){
            
        }else if($block != ''){
            $js[] = "$('".$block."').backstretch(";
            $js[] = $this->generateImages();
            $js[] = ");";
        }else{
            $js[] = "$.backstretch(";
            $js[] = $this->generateImages();
            $js[] = ");";

        }
        
        $view->registerJs(implode("\n", $js));
    }
    
    
    private function generateImages()
    {
        $images = $this->images;
        $count = count($images);
        $returnImages = [];
        
        foreach($images as $i){
            $returnImages[] = $i->image;
        }
        
        if($count > 1){
            $return = '["' . implode('","', $returnImages) . '"]';
            $return .= ',{duration: '.$this->duration.', fade: '.$this->fade.'}';
        }else{
            $return = '"'.$returnImages[0].'"';
        }
        
        return $return;
    }
    
 }