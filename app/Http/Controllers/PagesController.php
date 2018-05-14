<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    # Process variable data or params
    # Talk to the model
    # Recieve From the model
    # Compile or process data from the model if needed
    # pass that data to the correct view
    
    public static function getIndex() {
        $data = [];
        $data['startedtitle'] = "etrueques.com: Fastest and easiest way to buy and sell Crypto currency.";
        return view('started')->withData($data);
    }
    
    public static function getMarkets() {
        $data['marketstitle'] = "etrueques.com: See who's selling at the best price. Pick it up.";
        return view('markets')->withData($data);
    }
    
    public static function getCrypto() {
        $data['cryptotitle'] = "etrueques.com: Take a look of the market outside.";
        return view('crypto');
    }
    
    public static function getTrades() {
        $data['tradestitle'] = "etrueques.com: See the recent trades made on.";
        return view('trades');
    }
    
    public static function getExchanges() {
        $data['exchangestitle'] = "etrueques.com: See the new coin entrance in the exchanges.";
        return view('exchanges');
    }
}