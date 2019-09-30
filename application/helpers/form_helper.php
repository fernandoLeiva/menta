<?php defined("BASEPATH") or exit("No direct script access allowed");
if (!function_exists("form")) {
    function form($data)
    {
        $ci = &get_instance();

        $form = "<form>";

        foreach ($data as $e) {

            switch ($e->tipo) {
                case "titulo":
                    $form .= "<div class='hr-line-dashed'></div><h3 class='titulo'>" . $e->label . "</h3>";
                    break;

                case "subtitulo":
                    $form .= "<h4 class='subtitulo'>" . $e->label . "</h4>";
                    break;

                case "comentario":
                    $form .= "<h5 class='text-" . $e->color . "'>" . $e->label . "</h5>";
                    break;

                case "input":

                    $form .= input($e);
                    break;

                case "select":
                    $form .= select($e);
                    break;

                case "datepicker":
                    $form .= datepicker($e);
                    break;

                case "check":
                    $form .= check($e);
                    break;

                case "opciones":
                    $form .= opciones($e);
                    break;

                // case "html":
                //     $form .= $e->html;
                //     break;

                case "textarea":
                    $form .= textarea($e);
                    break;

                case "view":
                    $form .= $ci->load->view(MTBA."form/".$e->url, null, true);
                    break;

                default:
                    # code...
                    break;
            }
        }
        $form .= "<button class='btn btn-primary pull-right'>Guardar</button></form>";
        return $form;
    }

    function input($e)
    {
        return "<div class='form-group'>
                <label class='font-normal control-label'>$e->label :</label>
                <input ".(isset($e->requerido)?req():null)." type='text' placeholder='...' class='form-control' name='$e->name'  id='input_$e->label' " . ($e->requerido ? req(): null)."/>
            </div>";
    }

    function select($e)
    {
        $form = "<div class='form-group'>
                <label class='font-normal control-label'>$e->label:</label>
                <div>
                    <select  id='$e->name' name='$e->name'  class='chosen-select ".($e->requerido?"frm-select":null)."' tabindex='2'>
                        <option value=''>Seleccionar...</option>";
        foreach ($e->opciones as $value) {
            $form .= "<option value='$value->value'>$value->label</option>";
        }
        $form .= "</select>
            </div>
        </div>";

        return $form;
    }

    function datepicker($e)
    {
        return " <div class='form-group'>
                    <label class='font-normal control-label'>$e->label:</label>
                    <div class='input-group date'>
                      <input type='text' class='form-control datepicker' name='$e->name'

                        " . ($e->requerido ? req() : null) . "

                        data-bv-date='true'
                        data-bv-date-format='DD/MM/YYYY'
                        data-bv-date-message='Fecha no Valida'
                        />  <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                    </div>
                </div>";
    }

    function opciones($e)
    {
        $form = "<div class='form-group'><label class='font-normal control-label'>$e->label:</label>";
        foreach ($e->opciones as $key => $value) {
            $form .= "<div class='i-checks' style='margin-left:15%' ><label><input name='$e->name' type='radio' value='$value->value'
                    " . ($key == 0 && $e->requerido? req() : null) . "><i></i>$value->label</label></div>";
        }
        $form .= "</div>";
        return $form;
    }

    function check($e)
    {
        return "<div class='i-checks'><label> <input type='checkbox' value='$e->value' name='$e->name'> <i></i>$e->label</label></div>";
    }

    function textarea($e)
    {
        return "<div class='form-group'>
        <label class='font-normal control-label'>$e->label:</label>
        <textarea placeholder='...' class='form-control' name='$e->name'  id='input_$e->label' " . ($e->requerido ? req() : null) . "></textarea>
         </div>";
    }
}