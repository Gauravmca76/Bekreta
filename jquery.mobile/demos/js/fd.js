$(document).ready(function() {
    var fy=0;
    var sy=0;
    var ty1=0;
     var efy=0;
    var esy=0;
    var ety1=0;
        function getincexp(){
            var y1s = document.getElementsByName('iy1[]');
        var datay1 = [];
        for (var i = 0; i < y1s.length; i++) {
            var y1 = y1s[i];
            datay1[i] = y1.value;
        }
        var y2s = document.getElementsByName('iy2[]');
        var datay2 = [];
        for (var i = 0; i < y2s.length; i++) {
            var y2 = y2s[i];
            datay2[i] = y2.value;
        }
        var y3s = document.getElementsByName('iy3[]');
        var datay3 = [];
        for (var i = 0; i < y3s.length; i++) {
            var y3 = y3s[i];
            datay3[i] = y3.value;
        }
        var es = document.getElementsByName('iname[]');
        var dataes = [];
        for (var i = 0; i < es.length; i++) {
            var e = es[i];
            dataes[i] = e.value;
        }
            var y1es = document.getElementsByName('ey1[]');
            var datay1e = [];
            for (var i = 0; i < y1es.length; i++) {
                var y1 = y1es[i];
                datay1e[i] = y1.value;
            }
            var y2es = document.getElementsByName('ey2[]');
            var datay2e = [];
            for (var i = 0; i < y2es.length; i++) {
                var y2 = y2es[i];
                datay2e[i] = y2.value;
            }
            var y3es = document.getElementsByName('ey3[]');
            var datay3e = [];
            for (var i = 0; i < y3es.length; i++) {
                var y3 = y3es[i];
                datay3e[i] = y3.value;
            }
            var ese = document.getElementsByName('ename[]');
            var dataese = [];
            for (var i = 0; i < ese.length; i++) {
                var e = ese[i];
                dataese[i] = e.value;
            }

            /*showincexp(datay1,datay2,datay3,dataes,datay1e,datay2e,datay3e,dataese);*/
           
        }

       
        
        /*function  showincexp(datay1,datay2,datay3,dataes,datay1e,datay2e,datay3e,dataese){

            var len=dataes.length;
            var i=0;
            
            if(len>0){
                for (var i = 0; i <len; i++) {
                    fy+=parseInt(datay1[i]);
                    sy+=parseInt(datay2[i]);
                    ty1+=parseInt(datay3[i]);
                    
                          }
            }

            var elen=dataese.length;
            var i=0;
           
            if(elen>0){
                for (var i = 0; i <elen; i++) {
                    efy+=parseInt(datay1e[i]);
                    esy+=parseInt(datay2e[i]);
                    ety1+=parseInt(datay3e[i]);
                        
                          }
            }


            
        var chart = new CanvasJS.Chart("ns", {
            animationEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Income / Expense"
            },
            axisY: {
                title: "Income / Expense"
            },
            data: [{        
                type: "bar",  
                name: "Income",
                showInLegend: true,
                dataPoints: [      
                    { y:  parseInt(fy), label: "Year 1" },
                    { y:parseInt(sy),  label: "Year 2"  },
                    { y:parseInt(ty1),  label: "Year 3" }
                    
                ]
            },{        
                type: "bar",  
                name: "Expense",
                showInLegend: true,
                dataPoints: [      
                    { y: parseInt(efy), label: "Year 1" },
                    { y: parseInt(esy),  label: "Year 2"  },
                    { y:parseInt(ety1),  label: "Year 3" }
                    
                ]
            }]
        });
       
            chart.render();
           
        }

        function getasset() {
            var y1s = document.getElementsByName('ay1[]');
            var datay1 = [];
            for (var i = 0; i < y1s.length; i++) {
                var y1 = y1s[i];
                datay1[i] = y1.value;
            }
            var y2s = document.getElementsByName('ay2[]');
            var datay2 = [];
            for (var i = 0; i < y2s.length; i++) {
                var y2 = y2s[i];
                datay2[i] = y2.value;
            }
            var y3s = document.getElementsByName('ay3[]');
            var datay3 = [];
            for (var i = 0; i < y3s.length; i++) {
                var y3 = y3s[i];
                datay3[i] = y3.value;
            }
            var es = document.getElementsByName('aname[]');
            var dataes = [];
            for (var i = 0; i < es.length; i++) {
                var e = es[i];
                dataes[i] = e.value;
            }
        

        }
        function getliablities() {
            var y1s = document.getElementsByName('ly1[]');
            var datay1 = [];
            for (var i = 0; i < y1s.length; i++) {
                var y1 = y1s[i];
                datay1[i] = y1.value;
            }
            var y2s = document.getElementsByName('ly2[]');
            var datay2 = [];
            for (var i = 0; i < y2s.length; i++) {
                var y2 = y2s[i];
                datay2[i] = y2.value;
            }
            var y3s = document.getElementsByName('ly3[]');
            var datay3 = [];
            for (var i = 0; i < y3s.length; i++) {
                var y3 = y3s[i];
                datay3[i] = y3.value;
            }
            var es = document.getElementsByName('lname[]');
            var dataes = [];
            for (var i = 0; i < es.length; i++) {
                var e = es[i];
                dataes[i] = e.value;
            }
        
        }*/    
    $("#select_income").click(function() {
        var nameinc = document.getElementById("select_income").value;
        if (nameinc == "other") {
            $("#select_income").hide();
            $("#nametxt").show();
        } else {
            $("#nametxt").hide();
        }

    });
    /*$("#nameopt1").click(function() {
        var nametxt = document.getElementById("nameopt1").value;
        if (nametxt == "Other") {
            $("#nameopt1").hide();
            $("#nametxt1").show();
        } else {
            $("#nametxt1").hide();
        }

    });*/
    $(".add-row").click(function() {
        var nameinc = document.getElementById("select_income").value;
        if (nameinc == "other") {
            var name = $("#nametxt").val();
            $("#nametxt").val("");
            $("#select_income").show();
            $("#select_income").val("--select--");
            $("#nametxt").hide();

        } else {
            var name = $("#select_income").val();
            $("#select_income").val("--select--");
        }

        var y1 = $("#iyear1").val();
        var y2 = $("#iyear2").val();
        var y3 = $("#iyear3").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"iname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"iy1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"iy2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"iy3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#expincome tbody").append(markup);
        $("#iyear1").val("");
        $("#iyear2").val("");
        $("#iyear3").val("");
        getincexp();
    });

    // Find and remove selected table rows
    $(".delete-row").click(function() {
        $("#expincome tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
                getincexp();
            }
        });
    });

    $(".edit-row").click(function() {
        $("#expincome tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {

                var row = $(this).closest("tr")[0];
                var name = row.cells[1].innerHTML.split('>', 2);

                if ($("#update_select_income option[value='" + name[1] + "']").length > 0) {
                    $("#update_select_income").show();
                    $("#nametxt1").hide();
                    $("#update_select_income").val(name[1]);

                } else {
                    $("#update_select_income").hide();
                    $("#nametxt1").show();
                    $("#nametxt1").val(name[1]);
                }
                var y1 = row.cells[2].innerHTML.split('>', 2);
                var y2 = row.cells[3].innerHTML.split('>', 2);
                var y3 = row.cells[4].innerHTML.split('>', 2);
                $("#iyear11").val(y1[1]);
                $("#iyear21").val(y2[1]);
                $("#iyear31").val(y3[1]);
                $("#popupUpdateLogin").modal({
                    backdrop: false
                });
                $(this).parents("tr").remove();
                getincexp();
            }
        });
    });
    /*$(".update-row").click(function() {
        var name1 = document.getElementById("nameopt1").value;
        var name = document.getElementById("nametxt1").value;
        if (name1 != "--select--") {
            var name = $("#nameopt1").val();
            $("#nameopt1").val("--select--");

        } else {
            if ($("#nameopt1 option[value='" + name + "']").length > 0) {
                var name = $("#nameopt1").val();
                $("#nameopt1").val("--select--");

            } else {
                var name = $("#nametxt1").val();
                $("#nametxt1").val("");
                $("#nameopt1").show();
                $("#nameopt1").val("--select--");
                $("#nametxt1").hide();
            }
        }



        var y1 = $("#y11").val();
        var y2 = $("#y21").val();
        var y3 = $("#y31").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"iname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"iy1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"iy2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"iy3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#inc").append(markup);
        $("#y11").val("");
        $("#y21").val("");
        $("#y31").val("");
        getincexp();
    });
    $(".cancel-row").click(function() {
        var nametxt = document.getElementById("nameopt1").value;
        if (nametxt == "Other") {
            var name = $("#nametxt1").val();
            $("#nametxt1").val("");
            $("#nameopt1").show();
            $("#nameopt1").val("--select--");
            $("#nametxt1").hide();


        } else {
            var name = $("#nameopt1").val();
            $("#nameopt1").val("--select--");
        }

        var y1 = $("#y11").val();
        var y2 = $("#y21").val();
        var y3 = $("#y31").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"iname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"iy1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"iy2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"iy3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#inc").append(markup);
        $("#y11").val("");
        $("#y21").val("");
        $("#y31").val("");
        getincexp();
    });
    */



 //Exepnsee

    $("#nameoptex").click(function() {
        var nametxt = document.getElementById("nameoptex").value;
        if (nametxt == "Other") {
            $("#nameoptex").hide();
            $("#nametxtex").show();
        } else {
            $("#nametxtex").hide();
        }

    });
    $("#nameopt1ex").click(function() {
        var nametxt = document.getElementById("nameopt1ex").value;
        if (nametxt == "Other") {
            $("#nameopt1ex").hide();
            $("#nametxt1ex").show();
        } else {
            $("#nametxt1ex").hide();
        }

    });
    $(".add-row1").click(function() {
        var nametxt = document.getElementById("nameoptex").value;
        if (nametxt == "Other") {
            var name = $("#nametxtex").val();
            $("#nametxtex").val("");
            $("#nameoptex").show();
            $("#nameoptex").val("--select--");
            $("#nametxtex").hide();

        } else {
            var name = $("#nameoptex").val();
            $("#nameoptex").val("--select--");
            $("#nameoptex").show();
        }

        var y1 = $("#y1ex").val();
        var y2 = $("#y2ex").val();
        var y3 = $("#y3ex").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"ename[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ey1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ey2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ey3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#exp").append(markup);
        $("#y1ex").val("");
        $("#y2ex").val("");
        $("#y3ex").val("");
        getincexp();
    });
    $(".update-row1").click(function() {
        var name1 = document.getElementById("nameopt1ex").value;
        var name = document.getElementById("nametxt1ex").value;
        if (name1 != "--select--") {
            var name = $("#nameopt1ex").val();
            $("#nameopt1ex").val("--select--");

        } else {
            if ($("#nameopt1ex option[value='" + name + "']").length > 0) {
                var name = $("#nameopt1ex").val();
                $("#nameopt1ex").val("--select--");
                $("#nameopt1ex").show();
            } else {
                var name = $("#nametxt1ex").val();
                $("#nametxt1ex").val("");
                $("#nameopt1ex").val("--select--");
                $("#nametxt1ex").hide();
            }
        }



        var y1 = $("#y11ex").val();
        var y2 = $("#y21ex").val();
        var y3 = $("#y31ex").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"ename[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ey1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ey2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ey3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#exp").append(markup);
        $("#y11ex").val("");
        $("#y21ex").val("");
        $("#y31ex").val("");
        getincexp();
    });
    $(".cancel-row1").click(function() {
        var nametxt = document.getElementById("nameopt1ex").value;
        if (nametxt == "Other") {
            var name = $("#nametxt1ex").val();
            $("#nametxt1ex").val("");
            $("#nameopt1ex").show();
            $("#nameopt1ex").val("--select--");
            $("#nametxt1ex").hide();


        } else {
            var name = $("#nameopt1ex").val();
            $("#nameopt1ex").val("--select--");
            $("#nameopt1ex").show();
        }

        var y1 = $("#y11ex").val();
        var y2 = $("#y21ex").val();
        var y3 = $("#y31ex").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"ename[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ey1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ey2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ey3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#exp").append(markup);
        $("#y11ex").val("");
        $("#y21ex").val("");
        $("#y31ex").val("");
        getincexp();
    });

    // Find and remove selected table rows
    $(".delete-row1").click(function() {
        $("#exp").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
                getincexp();
            }
        });
    });
    $(".edit-row1").click(function() {

        $("#exp").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {

                var row = $(this).closest("tr")[0];
                var name = row.cells[1].innerHTML.split('>', 2);

                if ($("#nameopt1ex option[value='" + name[1] + "']").length > 0) {
                    $("#nameopt1ex").show();
                    $("#nametxt1ex").hide();
                    $("#nameopt1ex").val(name[1]);

                } else {
                    $("#nameopt1ex").hide();
                    $("#nametxt1ex").show();
                    $("#nametxt1ex").val(name[1]);
                }
                var y1 = row.cells[2].innerHTML.split('>', 2);
                var y2 = row.cells[3].innerHTML.split('>', 2);
                var y3 = row.cells[4].innerHTML.split('>', 2);
                $("#y11ex").val(y1[1]);
                $("#y21ex").val(y2[1]);
                $("#y31ex").val(y3[1]);
                $("#updateModal1").modal({
                    backdrop: false
                });
                $(this).parents("tr").remove();
                getincexp();
            }
        });
    });

 //Asset
    $("#nameoptasset").click(function() {
        var nametxt = document.getElementById("nameoptasset").value;
        if (nametxt == "Other") {
            $("#nameoptasset").hide();
            $("#nametxtasset").show();
        } else {
            $("#nametxtasset").hide();
        }

    });
    $("#nameopt1asset").click(function() {
        var nametxt = document.getElementById("nameopt1asset").value;
        if (nametxt == "Other") {
            $("#nameopt1asset").hide();
            $("#nametxt1asset").show();
        } else {
            $("#nametxt1asset").hide();
        }

    });
    $(".add-row3").click(function() {
        var nametxt = document.getElementById("nameoptasset").value;
        if (nametxt == "Other") {
            var name = $("#nametxtasset").val();
            $("#nametxtasset").val("");
            $("#nameoptasset").show();
            $("#nameoptasset").val("--select--");
            $("#nametxtasset").hide();

        } else {
            var name = $("#nameoptasset").val();
            $("#nameoptasset").val("--select--");
            $("#nameoptasset").show();
        }

        var y1 = $("#y1asset").val();
        var y2 = $("#y2asset").val();
        var y3 = $("#y3asset").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"aname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ay1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ay2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ay3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#asset").append(markup);
        $("#y1asset").val("");
        $("#y2asset").val("");
        $("#y3asset").val("");

    });
    $(".update-row3").click(function() {
        var name1 = document.getElementById("nameopt1asset").value;
        var name = document.getElementById("nametxt1asset").value;
        if (name1 != "--select--") {
            var name = $("#nameopt1asset").val();
            $("#nameopt1asset").val("--select--");

        } else {
            if ($("#nameopt1asset option[value='" + name + "']").length > 0) {
                var name = $("#nameopt1asset").val();
                $("#nameopt1asset").val("--select--");
                $("#nameopt1asset").show();
            } else {
                var name = $("#nametxt1asset").val();
                $("#nametxt1asset").val("");
                $("#nameopt1asset").val("--select--");
                $("#nametxt1asset").hide();
            }
        }



        var y1 = $("#y11asset").val();
        var y2 = $("#y21asset").val();
        var y3 = $("#y31asset").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"aname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ay1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ay2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ay3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#asset").append(markup);
        $("#y11asset").val("");
        $("#y21asset").val("");
        $("#y31asset").val("");

    });
    $(".cancel-row3").click(function() {
        var nametxt = document.getElementById("nameopt1asset").value;
        if (nametxt == "Other") {
            var name = $("#nametxt1asset").val();
            $("#nametxt1asset").val("");
            $("#nameopt1asset").show();
            $("#nameopt1asset").val("--select--");
            $("#nametxt1asset").hide();


        } else {
            var name = $("#nameopt1asset").val();
            $("#nameopt1asset").val("--select--");
            $("#nameopt1asset").show();
        }

        var y1 = $("#y11asset").val();
        var y2 = $("#y21asset").val();
        var y3 = $("#y31asset").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"aname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ay1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ay2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ay3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#asset").append(markup);
        $("#y11asset").val("");
        $("#y21asset").val("");
        $("#y31asset").val("");
    });

    // Find and remove selected table rows
    $(".delete-row3").click(function() {
        $("#asset").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });
    $(".edit-row3").click(function() {

        $("#asset").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {

                var row = $(this).closest("tr")[0];
                var name = row.cells[1].innerHTML.split('>', 2);

                if ($("#nameopt1asset option[value='" + name[1] + "']").length > 0) {
                    $("#nameopt1asset").show();
                    $("#nametxt1asset").hide();
                    $("#nameopt1asset").val(name[1]);

                } else {
                    $("#nameopt1asset").hide();
                    $("#nametxt1asset").show();
                    $("#nametxt1asset").val(name[1]);
                }
                var y1 = row.cells[2].innerHTML.split('>', 2);
                var y2 = row.cells[3].innerHTML.split('>', 2);
                var y3 = row.cells[4].innerHTML.split('>', 2);
                $("#y11asset").val(y1[1]);
                $("#y21asset").val(y2[1]);
                $("#y31asset").val(y3[1]);
                $("#updateModal3").modal({
                    backdrop: false
                });
                $(this).parents("tr").remove();

            }
        });
    });


 //Liabilities
    $("#nameoptLiabilities").click(function() {
        var nametxt = document.getElementById("nameoptLiabilities").value;
        if (nametxt == "Other") {
            $("#nameoptLiabilities").hide();
            $("#nametxtLiabilities").show();
        } else {
            $("#nametxtLiabilities").hide();
        }

    });
    $("#nameopt1Liabilities").click(function() {
        var nametxt = document.getElementById("nameopt1Liabilities").value;
        if (nametxt == "Other") {
            $("#nameopt1Liabilities").hide();
            $("#nametxt1Liabilities").show();
        } else {
            $("#nametxt1Liabilities").hide();
        }

    });
    $(".add-row4").click(function() {
        var nametxt = document.getElementById("nameoptLiabilities").value;
        if (nametxt == "Other") {
            var name = $("#nametxtLiabilities").val();
            $("#nametxtLiabilities").val("");
            $("#nameoptLiabilities").show();
            $("#nameoptLiabilities").val("--select--");
            $("#nametxtLiabilities").hide();

        } else {
            var name = $("#nameoptLiabilities").val();
            $("#nameoptLiabilities").val("--select--");
            $("#nameoptLiabilities").show();
        }

        var y1 = $("#y1Liabilities").val();
        var y2 = $("#y2Liabilities").val();
        var y3 = $("#y3Liabilities").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"lname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ly1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ly2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ly3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#Liabilities").append(markup);
        $("#y1Liabilities").val("");
        $("#y2Liabilities").val("");
        $("#y3Liabilities").val("");

    });
    $(".update-row4").click(function() {
        var name1 = document.getElementById("nameopt1Liabilities").value;
        var name = document.getElementById("nametxt1Liabilities").value;
        if (name1 != "--select--") {
            var name = $("#nameopt1Liabilities").val();
            $("#nameopt1Liabilities").val("--select--");

        } else {
            if ($("#nameopt1Liabilities option[value='" + name + "']").length > 0) {
                var name = $("#nameopt1Liabilities").val();
                $("#nameopt1Liabilities").val("--select--");
                $("#nameopt1Liabilities").show();
            } else {
                var name = $("#nametxt1Liabilities").val();
                $("#nametxt1Liabilities").val("");
                $("#nameopt1Liabilities").val("--select--");
                $("#nametxt1Liabilities").hide();
            }
        }



        var y1 = $("#y11Liabilities").val();
        var y2 = $("#y21Liabilities").val();
        var y3 = $("#y31Liabilities").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"lname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ly1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ly2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ly3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#Liabilities").append(markup);
        $("#y11Liabilities").val("");
        $("#y21Liabilities").val("");
        $("#y31Liabilities").val("");

    });
    $(".cancel-row4").click(function() {
        var nametxt = document.getElementById("nameopt1Liabilities").value;
        if (nametxt == "Other") {
            var name = $("#nametxt1Liabilities").val();
            $("#nametxt1Liabilities").val("");
            $("#nameopt1Liabilities").show();
            $("#nameopt1Liabilities").val("--select--");
            $("#nametxt1Liabilities").hide();


        } else {
            var name = $("#nameopt1Liabilities").val();
            $("#nameopt1Liabilities").val("--select--");
            $("#nameopt1Liabilities").show();
        }

        var y1 = $("#y11Liabilities").val();
        var y2 = $("#y21Liabilities").val();
        var y3 = $("#y31Liabilities").val();
        var markup =
            "<tr><td><input type='checkbox' name='record'></td><td><input type=\"hidden\" name=\"lname[]\" value=\"" +
            name + "\">" + name + "</td><td><input type=\"hidden\" name=\"ly1[]\" value=\"" + y1 +
            "\">" +
            y1 + "</td><td><input type=\"hidden\" name=\"ly2[]\" value=\"" + y2 + "\">" + y2 +
            "</td><td><input type=\"hidden\" name=\"ly3[]\" value=\"" + y3 + "\">" + y3 +
            "</td></tr>";
        $("#Liabilities").append(markup);
        $("#y11Liabilities").val("");
        $("#y21Liabilities").val("");
        $("#y31Liabilities").val("");
    });

    // Find and remove selected table rows
    $(".delete-row4").click(function() {
        $("#Liabilities").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });
    $(".edit-row4").click(function() {

        $("#Liabilities").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {

                var row = $(this).closest("tr")[0];
                var name = row.cells[1].innerHTML.split('>', 2);

                if ($("#nameopt1Liabilities option[value='" + name[1] + "']").length > 0) {
                    $("#nameopt1Liabilities").show();
                    $("#nametxt1Liabilities").hide();
                    $("#nameopt1Liabilities").val(name[1]);

                } else {
                    $("#nameopt1Liabilities").hide();
                    $("#nametxt1Liabilities").show();
                    $("#nametxt1Liabilities").val(name[1]);
                }
                var y1 = row.cells[2].innerHTML.split('>', 2);
                var y2 = row.cells[3].innerHTML.split('>', 2);
                var y3 = row.cells[4].innerHTML.split('>', 2);
                $("#y11Liabilities").val(y1[1]);
                $("#y21Liabilities").val(y2[1]);
                $("#y31Liabilities").val(y3[1]);
                $("#updateModal4").modal({
                    backdrop: false
                });
                $(this).parents("tr").remove();

            }
        });
    });

});

/*//format


function convertNumberToWords(amount) {
    var words = new Array();
    words[0] = '';
    words[1] = 'One';
    words[2] = 'Two';
    words[3] = 'Three';
    words[4] = 'Four';
    words[5] = 'Five';
    words[6] = 'Six';
    words[7] = 'Seven';
    words[8] = 'Eight';
    words[9] = 'Nine';
    words[10] = 'Ten';
    words[11] = 'Eleven';
    words[12] = 'Twelve';
    words[13] = 'Thirteen';
    words[14] = 'Fourteen';
    words[15] = 'Fifteen';
    words[16] = 'Sixteen';
    words[17] = 'Seventeen';
    words[18] = 'Eighteen';
    words[19] = 'Nineteen';
    words[20] = 'Twenty';
    words[30] = 'Thirty';
    words[40] = 'Forty';
    words[50] = 'Fifty';
    words[60] = 'Sixty';
    words[70] = 'Seventy';
    words[80] = 'Eighty';
    words[90] = 'Ninety';
    amount = amount.toString();
    var atemp = amount.split(".");
    var number = atemp[0].split(",").join("");
    var n_length = number.length;
    var words_string = "";
    if (n_length <= 9) {
        var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
        var received_n_array = new Array();
        for (var i = 0; i < n_length; i++) {
            received_n_array[i] = number.substr(i, 1);
        }
        for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
            n_array[i] = received_n_array[j];
        }
        for (var i = 0, j = 1; i < 9; i++, j++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                if (n_array[i] == 1) {
                    n_array[j] = 10 + parseInt(n_array[j]);
                    n_array[i] = 0;
                }
            }
        }
        value = "";
        for (var i = 0; i < 9; i++) {
            if (i == 0 || i == 2 || i == 4 || i == 7) {
                value = n_array[i] * 10;
            } else {
                value = n_array[i];
            }
            if (value != 0) {
                words_string += words[value] + " ";
            }
            if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Crores ";
            }
            if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Lakhs ";
            }
            if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
                words_string += "Thousand ";
            }
            if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
                words_string += "Hundred and ";
            } else if (i == 6 && value != 0) {
                words_string += "Hundred ";
            }
        }
        words_string = words_string.split("  ").join(" ");
    }
    return words_string;
}*/