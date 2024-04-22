<?php

class Mmodel extends CI_Model
{
    public function __construct()
    {

        parent::__construct();

    }

    public function exportArray($brand, $patern, $rim_diameter, $tire_rate, $tire_width)
    {

        if ($brand && $patern && $rim_diameter && $tire_rate && $tire_width) {

            $brand_m = $this->db->get_where('brand', array('id' => $brand))->row()->name;
            $patern_m = $this->db->get_where('patern', array('id' => $patern))->row();
            $rim_diameter_m = $this->db->get_where('rim_diameter', array('id' => $rim_diameter))->row()->name;
            $tire_rate_m = $this->db->get_where('tire_rate', array('id' => $tire_rate))->row()->name;
            $tire_width_m = $this->db->get_where('tire_width', array('id' => $tire_width))->row()->name;

            return array(
                'title' => ucfirst($brand_m) . ' ' . ucfirst($patern_m->paternName) . ' ' . $tire_width_m . '/' . $tire_rate_m . 'R' . $rim_diameter_m,
                'description' => ucfirst($brand_m) . ' ' . ucfirst($patern_m->paternName) . ' ' . $tire_width_m . '/' . $tire_rate_m . 'R' . $rim_diameter_m . ' Ürünü Hakkında Detaylı Bilgiye Ulaşabilirsiniz.',
                'keywords' => ucfirst($brand_m) . ' ' . ucfirst($patern_m->paternName) . ' ' . $tire_width_m . '/' . $tire_rate_m . 'R' . $rim_diameter_m . ' Fiyatı, ' . ucfirst($brand_m) . ' ' . ucfirst($patern_m->paternName) . ' ' . $tire_width_m . '/' . $tire_rate_m . 'R' . $rim_diameter_m . ' En Ucuz, ' . ucfirst($brand_m) . ' ' . ucfirst($patern_m->paternName) . ' ' . $tire_width_m . '/' . $tire_rate_m . 'R' . $rim_diameter_m . ' Inceleme',
                'category' => $patern_m->category,
                'season' => $patern_m->season,
                'property' => $patern_m->property,
                'guvenlik' => $patern_m->guvenlik,
                'tasarruf' => $patern_m->tasarruf,
                'konfor' => $patern_m->konfor,
            );

        } else {

            return array(
                'errorCode' => 2,
                'errorMsg' => 'Verilerden biri veya birkaçı yok'
            );

        }

    }
}