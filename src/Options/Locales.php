<?php
   /**
     * This file is a part of the Ekolo Builder
     * @author Don de Dieu BOLENGE <dondedieubolenge@gmail.com>
     */
    namespace Ekolo\Http\Options;
    
    use Ekolo\EkoMagic\ParameterBag;

    /**
     * Manage the locales variables send to view
     */
    class Locales extends ParameterBag {

        protected $locales;

        public function __construct(array $vars = [])
        {
            $this->locales = $vars;
            parent::__construct($this->locales);
        }
    }