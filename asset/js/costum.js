/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        var lahir = $("#pelamar_tgl_lahir" ).val();
        var masuk = $("#pelamar_tgl_masuk" ).val();
        $(function() {
                $( ".datepicker" ).datepicker({
                        changeMonth: true,
                        changeYear: true,
                        yearRange: "-50:+10",
                        format : "dd-mm-yyyy"
                });
                $( "#pelamar_tgl_lahir" ).val(lahir);
                $( "#pelamar_tgl_masuk" ).val(masuk);
        });