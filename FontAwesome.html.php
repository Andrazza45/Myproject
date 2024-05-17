<?php
/**
 * FontAwesome
 *
 * This is a view file that must be only contain OUTPUT HTML
 * The scripts logic must be written inside controllers!!!
 * you can user utility form
 *
 * This page permit to see the list of icons and copy its html properties and classes from a modal
 *
 */
use Core\Backend\Form;
use Core\Utility\Main as Utility;
$form = new Form();
$utility = new Utility();

$view_data = $this->view_data; 
?>
<!-- regionBreadcrumbs -->
<section class="mb-4">
    <section class="row align-items-center flex-lg-nowrap">

        <div class="col-12 col-lg">
            <div>
                <h2 class="ml-3">
                    {{Title}}
                </h2>
            </div>
            <div>
                <nav aria-label="breadcrumb" class="css-subtitle-page ml-3 mb-3 mb-lg-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a class="css-subtitle-page" title="Torna alla dashboard" href= <?= HTTP_URL . "backend/dashboard/"?>>Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            {{Title}}
                        </li>
                    </ol>
                </nav>
            </div>

        </div>

<!--        <div class="col-12 col-lg-auto text-left text-lg-right">-->
<!--           {{BackendActionButtons}}-->
<!--        </div>-->

</section>

<div class = "main-container container-fh__content px-5 py-5">
    <div class = "row border pt-3 mb-4 p-2">

    <?php
    foreach ($view_data['icons'] as $icon)
    {
      $str ="";
      $str.="<div class=\"col-md-4 col-sm-6 col-lg-3 col-print-4\">";
      $str ="<div class = \"container\">";
      $str.= $icon['html'].' '.$icon['description'];
      $form->simpleButton('BtnClass','Copia Classi',false,false,'warning','','','medium',12,'',true);
      $form->simpleButton('BtnHTML','Copia HTML',false,false,'warning','','','medium',12,'',true);
      $str.="</div>";
      $str.="</div>";
      echo $str;
    }

?>
   </div>
</div>

<div class="modal fade" id="detailsFont" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Exit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
</div>

<?=$this->backend->getJavascriptModuleFile($this, 'FontAwesome.js', false, false); // add JS file ?>
<?=$this->backend->getStylesheetModuleFile($this, 'FontAwesome.css'); // add CSS file?>
