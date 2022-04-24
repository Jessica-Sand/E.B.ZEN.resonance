<?php 

namespace App\Controllers;

use App\Models\Product;
use oFramework\Controllers\CoreController;

class ShopController extends CoreController
{
    /**
     * Method for the product list
     */
    public function list()
    {
        $this->show('shop/list', [
            'products' => Product::findAll()
        ]);
    }

    /**
     * Method for the detail of a product
     */
    public function details($id)
    {   
            $modelProduct = new Product();
            $product = $modelProduct->find($id);

            $this->show('shop/details', [
                'id' => $id,
                'product' => $product
        ]);
    }

    /**
     * Method for the detail of the shopping cart
     */
    public function cart() {
        $errors = [];
        
        if (!empty($_POST)) {
            $product_id = $_POST['product_id'];
            $email = $_POST['email'];

            if (empty($email)) {
                $errors[] = 'Email is empty';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Vous devez saisir un email';
            }
            
            if (empty($errors)) {
                $to = 'contact@eb-zen-resonance.fr';
                $from = $email;
                $subject = 'Nouvelle demande de réservation  d\'un produit sur le site eb-zen-resonance.fr';
                
                $bodyParagraphs = 
                '<html>
                    <body>
                    <p><strong>' . $email . '</strong> souhaiterait réserver le produit suivant : <strong>' . $product_id . '</strong></p>
                    <p>Contactez la personne à l\'adresse suivante : <strong>' . $email . '</strong></p>
                    </body>
                </html>';

                $encoding = "utf-8";

                // Preferences for Subject field
                $subject_preferences = array(
                    "input-charset" => $encoding,
                    "output-charset" => $encoding,
                    "line-length" => 76,
                    "line-break-chars" => "\r\n"
                );

                // Mail header
                $header = "Content-type: text/html; charset=".$encoding." \r\n";
                $header .= "From: " . $from." <" . $from."> \r\n";
                $header .= "MIME-Version: 1.0 \r\n";
                $header .= "Content-Transfer-Encoding: 8bit \r\n";
                $header .= "Date: ".date("r (T)")." \r\n";
                $header .= iconv_mime_encode("Subject", $subject, $subject_preferences);

                if (mail($to, $subject, $bodyParagraphs, $header)) {
                    header('Location: /message-envoye');
                } else {
                    echo 'Oops, quelque chose c\'est mal passé. Veuillez réessayer';
                }
            } else {
                join('<br/>', $errors);
            }
            var_dump($bodyParagraphs);
            die;
        }
    }
}