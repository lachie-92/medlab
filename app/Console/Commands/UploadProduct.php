<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Product;

class UploadProduct extends Command
{
    protected $signature = 'upload:product';

    protected $description = 'upload new product';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Model::unguard();

        Product::create([
            'product_name_index' => "Immune-5 Vanilla",
            'austl_number' => '276097',
            'product_name' => 'Immune-5&trade; Vanilla',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Immune-5&trade; Vanilla</small></h4>
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with 
                    two specific probiotic species shown to assist with immune function and assist with upper respiratory tract infections. 
                </p>
                ',
            'patent' =>
                '
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
            'general_summary' =>
                '
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with two specific 
                    probiotic species shown to assist with immune function and assist with upper respiratory tract infections. ResistAid&trade; is a 
                    prebiotic soluble fibre with immune modulating properties while Lactoferrin is a naturally occurring protein found in the body 
                    with broad spectrum anti-microbial and anti-viral activity. Colostrum provides important innate immune supporting proteins 
                    including the antibody IgG that both activates and modulate the body defence processes.
                </p>
                ',
            'practitioner_summary' =>
                "
                <p>
                    <strong>STANDARD INDICATIONS</strong>
                </p>
                <p>
                    <ul>
                        <li>
                            Treatment of symptoms of mild infections of upper respiratory tract
                        </li>
                        <li>
                            Helps maintain healthy digestive function
                        </li>
                        <li>
                            Aids, assists or helps in the maintenance or improvement of general well-being
                        </li>
                        <li>
                            Relief of symptoms of mild upper respiratory infections
                        </li>
                        <li>
                            For the symptomatic relief of upper respiratory tract infections
                        </li>
                        <li>
                            May assist in the management of upper respiratory tract infections
                        </li>
                    </ul>
                </p>
                <br>
                <p>
                    <strong>SPECIFIC INDICATIONS</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            May assist in supporting and maintaining healthy immune function. Short-chain fatty acids
                            produced from the metabolism of Arabinogalactan (ResistAid&trade;) supports healthy immune
                            function in healthy individuals.
                        </li>
                        <li>
                            Arabinogalactan (ResistAid) is a prebiotic and produces short-chain fatty acids upon
                            metabolism by gut bacteria, maintaining healthy colonic mucosal structure and function.
                        </li>
                        <li>
                            Lactoferrin is naturally found in colostrum and human milk and is a component of the
                            innate immune response providing broad-spectrum anti-microbial and anti-viral activity.
                        </li>
                        <li>
                            Lactoferrin combined with bovine milk-derived IgG immunoglobulins may decrease the
                            incidence of colds and may also reduce the duration of cold associated symptoms.
                        </li>
                        <li>
                            Colostrum and IgG immunoglobulins provide important innate immune supporting proteins that
                            modulate the body's defence processes and provide anti-bacterial effects.
                        </li>
                        <li>
                            Bovine colostrum is a rich source of immune factors, growth factors and bioactive proteins
                            which may support healthy immune function.
                        </li>
                        <li>
                            Immunoglobulins (Ig) are protein molecules that function as antibodies against many
                            pathogenic and potentially pathogenic microorganisms, such as bacteria and viruses.
                        </li>
                        <li>
                            The functional activities of IgG molecules, such as bactericidal effect mediated by
                            complement, viral neutralisation, inactivation of toxins and opsonisation, are important
                            for the development of an effective immune response against a large range of microorganisms
                            and their toxic products.
                        </li>
                        <li>
                            Arabinogalactan may increase the body's IgG antibody immune response to bacterial antigens.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis have shown to enhance both
                            mucosal and systemic antibody (IgG and salivary IgA) responses to various vaccine challenges
                            in healthy individuals.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis may improve specific immune
                            responses and influence immune regulation.
                        </li>
                        <li>
                            Vegetables and MK-4 that is found in animal products .
                        </li>
                    </ul>
                </p>
                <br>
                <p>
                    <strong>WARNINGS</strong>
                </p>
                <p>
                    <ul>
                        <li>Bovine colostrum powder is derived from cow's milk and may contain lactose.</li>
                        <li>This product is not suitable for use in children under the age of 12 months except on professional medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>
                ",
            'side_effects' =>
                "
                <p>
                    If symptoms persist consult your healthcare practitioner. Not to be used in children under two years of
                    age except on professional health advice. Colostrum is derived from cow’s milk and contains lactose and cow's
                    milk proteins.
                </p>
                ",
            'interactions' =>
                '
                ',
            'dosage_information' =>
                '
                <h4 class="medlab_product_content_title">
                    Direction of Use:
                </h4>
                <p>
                    Mix one (1) level teaspoon (5g) into 100-200 mL of water and drink immediately, two (2) times per day or as directed by your healthcare practitioner.  
                </p>
                ',
            'ingredients' =>
                '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td>
                                <p>
                                    <strong>ACTIVE INGREDIENTS</strong>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <strong>Each scoop (5 g dose) contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactoferrin
                                </p>
                            </td>
                            <td>
                                <p>
                                    200 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Colostrum
                                </p>
                            </td>
                            <td>
                                <p>
                                    340 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin-left:2em">
                                    Equiv. IgG
                                </p>
                            </td>
                            <td>
                                <p>
                                    100mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Arabinogalactactan
                                </p>
                            </td>
                            <td>
                                <p>
                                    2.25g
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactobacillus paracasei
                                </p>
                            </td>
                            <td>
                                <p>
                                    5 billion
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Bifidobacterium lactis
                                </p>
                            </td>
                            <td>
                                <p>
                                       5 billion
                                </p>
                            </td>
                        </tr>
                       
                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>Silica</p>
                                <p>Stevia</p>
                                <p>Natural Vanilla Flavour</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Immune-5/English.pdf"target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                ',
            'free_from' =>
                '
                <p class="medlab_product_content_sub_title">
                    Contains No Artificial Colours, Flavours or Sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
            'price_retail' => 45.75,
            'price_wholesale' => 30.50,
            'image_path' => '/img/products/immune-5/Immune-5-vanilla.png',
            'thumb_image_path' => '/img/products/immune-5/Immune-5-vanilla_thumb.png',
            'in_stock' => true,
            'slug' => 'immune-5-vanilla'
        ]);


        Product::create([

            'product_name_index' => "Immune-5 Raspberry",
            'austl_number' => '276104',
            'product_name' => 'Immune-5&trade; Raspbery',
            'short_description' =>
                '
                <h4 class="medlab_product_content_title">Immune-5&trade; Raspberry</small></h4>
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with
                    two specific probiotic species shown to assist with immune function and assist with upper respiratory tract infections.
                </p>
                ',
            'patent' =>
                '
                <p>
                    Always read the label, use only as directed, if symptoms persist see your healthcare practitioner.
                </p>
                ',
            'general_summary' =>
                '
                <p>
                    Immune-5&trade; is a scientifically-based combination of select first line immune modulating nutrients, together with two specific
                    probiotic species shown to assist with immune function and assist with upper respiratory tract infections. ResistAid&trade; is a
                    prebiotic soluble fibre with immune modulating properties while Lactoferrin is a naturally occurring protein found in the body
                    with broad spectrum anti-microbial and anti-viral activity. Colostrum provides important innate immune supporting proteins
                    including the antibody IgG that both activates and modulate the body defence processes.
                </p>
                ',
            'practitioner_summary' =>
                "
                <p>
                    <strong>STANDARD INDICATIONS</strong>
                </p>
                <p>
                    <ul>
                        <li>
                            Treatment of symptoms of mild infections of upper respiratory tract
                        </li>
                        <li>
                            Helps maintain healthy digestive function
                        </li>
                        <li>
                            Aids, assists or helps in the maintenance or improvement of general well-being
                        </li>
                        <li>
                            Relief of symptoms of mild upper respiratory infections
                        </li>
                        <li>
                            For the symptomatic relief of upper respiratory tract infections
                        </li>
                        <li>
                            May assist in the management of upper respiratory tract infections
                        </li>
                    </ul>
                </p>
                <br>
                <p>
                    <strong>SPECIFIC INDICATIONS</strong>
                </p>

                <p>
                    <ul>
                        <li>
                            May assist in supporting and maintaining healthy immune function. Short-chain fatty acids
                            produced from the metabolism of Arabinogalactan (ResistAid&trade;) supports healthy immune
                            function in healthy individuals.
                        </li>
                        <li>
                            Arabinogalactan (ResistAid) is a prebiotic and produces short-chain fatty acids upon
                            metabolism by gut bacteria, maintaining healthy colonic mucosal structure and function.
                        </li>
                        <li>
                            Lactoferrin is naturally found in colostrum and human milk and is a component of the
                            innate immune response providing broad-spectrum anti-microbial and anti-viral activity.
                        </li>
                        <li>
                            Lactoferrin combined with bovine milk-derived IgG immunoglobulins may decrease the
                            incidence of colds and may also reduce the duration of cold associated symptoms.
                        </li>
                        <li>
                            Colostrum and IgG immunoglobulins provide important innate immune supporting proteins that
                            modulate the body's defence processes and provide anti-bacterial effects.
                        </li>
                        <li>
                            Bovine colostrum is a rich source of immune factors, growth factors and bioactive proteins
                            which may support healthy immune function.
                        </li>
                        <li>
                            Immunoglobulins (Ig) are protein molecules that function as antibodies against many
                            pathogenic and potentially pathogenic microorganisms, such as bacteria and viruses.
                        </li>
                        <li>
                            The functional activities of IgG molecules, such as bactericidal effect mediated by
                            complement, viral neutralisation, inactivation of toxins and opsonisation, are important
                            for the development of an effective immune response against a large range of microorganisms
                            and their toxic products.
                        </li>
                        <li>
                            Arabinogalactan may increase the body's IgG antibody immune response to bacterial antigens.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis have shown to enhance both
                            mucosal and systemic antibody (IgG and salivary IgA) responses to various vaccine challenges
                            in healthy individuals.
                        </li>
                        <li>
                            Lactobacillus paracasei and Bifidobacterium animalis ssp. lactis may improve specific immune
                            responses and influence immune regulation.
                        </li>
                        <li>
                            Vegetables and MK-4 that is found in animal products .
                        </li>
                    </ul>
                </p>
                <br>
                <p>
                    <strong>WARNINGS</strong>
                </p>
                <p>
                    <ul>
                        <li>Bovine colostrum powder is derived from cow's milk and may contain lactose.</li>
                        <li>This product is not suitable for use in children under the age of 12 months except on professional medical advice.</li>
                        <li>If symptoms persist consult your healthcare practitioner.</li>
                    </ul>
                </p>
                ",
            'side_effects' =>
                "
                <p>
                    If symptoms persist consult your healthcare practitioner. Not to be used in children under two years of
                    age except on professional health advice. Colostrum is derived from cow’s milk and contains lactose and cow's
                    milk proteins.
                </p>
                ",
            'interactions' =>
                '
                ',
            'dosage_information' =>
                '
                <h4 class="medlab_product_content_title">
                    Direction of Use:
                </h4>
                <p>
                    Mix one (1) level teaspoon (5g) into 100-200 mL of water and drink immediately, two (2) times per day or as directed by your healthcare practitioner.
                </p>
                ',
            'ingredients' =>
                '
                <table class="table table-striped medlab_product_ingredients_table" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td>
                                <p>
                                    <strong>ACTIVE INGREDIENTS</strong>
                                </p>
                            </td>
                            <td>
                                <p>
                                    <strong>Each scoop (5 g dose) contains:</strong>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactoferrin
                                </p>
                            </td>
                            <td>
                                <p>
                                    200 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Colostrum
                                </p>
                            </td>
                            <td>
                                <p>
                                    340 mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin-left:2em">
                                    Equiv. IgG
                                </p>
                            </td>
                            <td>
                                <p>
                                    100mg
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Arabinogalactactan
                                </p>
                            </td>
                            <td>
                                <p>
                                    2.25g
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Lactobacillus paracasei
                                </p>
                            </td>
                            <td>
                                <p>
                                    5 billion
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Bifidobacterium lactis
                                </p>
                            </td>
                            <td>
                                <p>
                                       5 billion
                                </p>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <p>
                                    <strong>Excipient Ingredients</strong>
                                </p>
                                <p>Maltodextrin</p>
                                <p>Silica</p>
                                <p>Stevia</p>
                                <p>Natural Raspberry Flavour</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                ',
            'cmi' =>
                '
                <p>
                    <img width="24" height="24" alt="English" src="/img/products/cmi/English.png">
                    <a class="medlab_panel_content_link"href="https://s3.amazonaws.com/medlab-pdfs/Immune-5/English.pdf"target="_blank">
                        Click Here For English CMI
                    </a>
                </p>
                ',
            'free_from' =>
                '
                <p class="medlab_product_content_sub_title">
                    Contains No Artificial Colours, Flavours or Sweeteners
                </p>
                <p class="medlab_product_content_sub_title">
                    Suitable for Vegetarians
                </p>
                ',
            'price_retail' => 45.75,
            'price_wholesale' => 30.50,
            'image_path' => '/img/products/immune-5/Immune-5-raspberry.png',
            'thumb_image_path' => '/img/products/immune-5/Immune-5-raspberry_thumb.png',
            'in_stock' => true,
            'slug' => 'immune-5-raspberry'
        ]);
        

        Model::reguard();
    }
}