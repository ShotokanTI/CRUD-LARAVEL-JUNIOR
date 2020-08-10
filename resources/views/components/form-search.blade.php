<script>
    $(document).ready(function() {
        let escolhido = '{{$escolhido}}';
        console.log(escolhido)


        if($("#" + escolhido + "_search").length <= 0 ){
        $('input[name=' + escolhido + ']').parent().after("<div id=" + escolhido + "_search" + ' style="text-align:center" ><span style="color:red" >Busca não encontrada</span></div>')
        }

        $('input[name=' + escolhido + ']').css('color', 'red')
    })
</script>