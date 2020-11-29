<?php

	class Cart{

        private $product_list = array();

        public function add($product, $quantity){
            $exists = false;//Su ton tai chua product trong list
            foreach ($this->product_list as &$item) {
                if ($item['id'] == $product['id']) {
                    $item['quantity'] += $quantity;
                    $item['subtotal'] = $item['quantity'] * $item['price'];
                    $exists = true;
                    break;
                }
            }
            if ($exists == false) {// Neu product chua co trong list
                $subtotal = $product['price'] * $quantity;
                $product_cart = array(
                    'id' => $product['id'],
                    'name' => $product['name'],
                    'image' => $product['image'],
                    'alias' => $product['alias'],
                    'price' => $product['price'],
                    'quantity' => $quantity,
                    'subtotal' => $subtotal
                );
                $this->product_list[] = $product_cart;
            }
            var_dump($this->product_list);
        }

        public function update($product_id, $quantity){
            foreach ($this->product_list as &$item) {
                if ($item['id'] == $product_id) {
                    $item['quantity'] = $quantity;
                    $item['subtotal'] = $quantity * $item['price'];
                    break;
                }
            }
        }

        public function delete($product_id){
            $length_list = count($this->product_list);
            for ($i = 0; $i < $length_list; $i++) {
                if ($this->product_list[$i]['id'] == $product_id) {
                    array_splice($this->product_list, $i, 1);
                    break;
                }
            }
        }

        public function getContent(){
            return $this->product_list;
        }

        public function getCount(){
            return count($this->product_list);
        }

        public function setContent($content){
            $this->product_list = $content;
        }

        public function getTotal(){
        	$total = 0;
            foreach ($this->product_list as $item) {
                $total += $item['subtotal'];
            }
        	return $total;
        }
    }
?>