<?php

namespace App\Http\Controllers;

use App\Models\EncryptTest;
use Illuminate\Http\Request;

class EncryptTestController extends Controller
{
    public function index()
    {
        return view('encrypt.index');
    }
    public function signup(Request $request)
    {
        function aes_encrypt($plaintext, $key, $iv)
        {
            //declare block
            $blockSize = 16;
            // Pad the plaintext to match block size
            // take out size of string
            $padding = $blockSize - (strlen($plaintext) % $blockSize);
            // provide string value to character
            $plaintext .= str_repeat(chr($padding), $padding);
            // to put encrypted text
            $ciphertext = '';
            $prevBlock = $iv;
            //looping for getting ciper suit value
            for ($i = 0; $i < strlen($plaintext); $i += $blockSize) {
                $block = substr($plaintext, $i, $blockSize) ^ $prevBlock;
                // call the function to concat string with given key
                $encryptedBlock = your_aes_encrypt_function($block, $key);
                $ciphertext .= $encryptedBlock;
                $prevBlock = $encryptedBlock;
            }
    
            return $ciphertext;
        }
        function your_aes_encrypt_function($block, $key)
        {
            return $block; // Replace with actual encryption
        }
        $key = 'neha@123'; // Replace with your key
        $iv = '1234567890123456'; // Replace with your IV
        $textToEncrypt = $request->password;
        $encryptedText = base64_encode(aes_encrypt($textToEncrypt, $key, $iv));

        $data=new EncryptTest();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$encryptedText;
        $data->save();
        return back();
        // echo$encryptedText;
    }

    public function login(Request $request)
    {
        return view('encrypt.login');
    }
    public function loginconfirm(Request $request)
    {
        $data=EncryptTest::where('email',$request->email)->first();
        // dd($request->password);
        if($data){
           $password=$data->password;
        //    dd($password);
        function aes_decrypt($ciphertext, $key, $iv) {
            $blockSize = 16;
            $plaintext = '';
            $prevBlock = $iv;
        
            for ($i = 0; $i < strlen($ciphertext); $i += $blockSize) {
                $encryptedBlock = substr($ciphertext, $i, $blockSize);
        
                // Perform AES decryption (replace this with your own AES logic)
                $decryptedBlock = your_aes_decrypt_function($encryptedBlock, $key);
        
                $plaintext .= $decryptedBlock ^ $prevBlock;
                $prevBlock = $encryptedBlock;
            }
        
            // Remove padding
            $padding = ord($plaintext[strlen($plaintext) - 1]);
            $plaintext = substr($plaintext, 0, -$padding);
        
            return $plaintext;
        }
        function your_aes_decrypt_function($block, $key) {
            // Implement your AES decryption logic here
            return $block; // Replace with actual decryption
        }
        $key = 'neha@123'; // Replace with your key
        $iv = '1234567890123456'; // Replace with your IV
        $encryptedText=$password;
        
        $decryptedText = aes_decrypt(base64_decode($encryptedText), $key, $iv);


        if($request->password == $decryptedText){
            echo "login";
        }else{
            echo "wrong pass";
        }
        
        //optional use for password
        // function checkTextMatch($decryptText,$userInputText){
            
        //     if($decryptText === $userInputText){
        //         return true;
        //     }else{
        //        return false;
        //     }
        // }
        // $boolTextCheck = checkTextMatch($decryptedText,"NehaYouAreGoodGirls");
        // if($boolTextCheck){
        //     //redirect logic here 
        //     //establish session
        //     echo"text matched ";
        // }else{
        //     echo"text not matched";
        // }
        // }else{
        //     echo "email not registered";
        }
        
    }
}
