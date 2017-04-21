<?php

function customer_add($data = array()){
    return db_insert('transaction', $data);
}