$(document).ready(function()
{
  let classTRASH = $(".trash");
    $(classTRASH).click(function() {
      let freme = document.getElementById('button_enter');
      freme.insertAdjacentHTML('afterend', '<div id="warning"><div><p>Вы уверены, что хотите удалить задачу безвозвратно?</p></div><div><button value="yes">Да, удалить </button><button value="not">Нет</button></div></div>');
      let widthWindow = $(window).width();
      let heightWindow = $(window).height();

      let warning = document.getElementById('warning');
      warning.style.height = heightWindow*0.8 + "px";
      warning.style.width = widthWindow*0.8 + "px";
      warning.style.left = widthWindow*0.2/2 + "px";
      warning.style.top = heightWindow*0.2/2 + "px";
      $("button[value='not']").click(function() {
        warning.style.display = "none";
      });

        const id = $(this).attr("id");
        $(this).parent().addClass("active");

        $("button[value='yes']").click(function(param){
        const request = new XMLHttpRequest();
        const url = "handlers/delete.php";
        const params = "id_notes=" + id;
        request.open("POST", url, true);
        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.addEventListener("readystatechange", () => {
          if(request.readyState === 4 && request.status === 200) {
            $(".create.active").remove();
            $(".delivery.active").remove();
            $(".in_work.active").remove();
            warning.style.display = "none";
          }
        });
        request.send(params);
      });
    });
    });
