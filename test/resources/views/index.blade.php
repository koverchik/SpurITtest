@extends('main.head')

@section('base')
<header>
  <div class="customers">
    <h1><a href="create.php">Создать задачу</a></h1>
  </div>
</header>
     <main id="button_enter">
       <div>
         <h2>TO DO</h2>
       <ul>
         <li class="create">
           <a href="#">Взять задачу</a>
           <div>
              Описание задачи.
            </div>
            <div class="comment">
              <img src="image/comment.png"/>
              <p>
                1
              </p>
            </div>
         </li>
       </ul>
    </div>

      <div>
        <h2>DOING</h2>
        <ul>
          <li class="in_work">
            <a href="#">Задача в работе</a>
            <div>
              Описание задачи.
            </div>
            <div class="comment">
              <img src="image/comment.png"/>
              <p>
                1
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <h2>DONE</h2>
        <ul>
          <li class="delivery">
              <a href="#">Задача выполнена</a>
              <div>
                Описание задачи.
              </div>
              <div class="comment">
                <img src="image/comment.png"/>
                <p>
                  1
                </p>
              </div>
          </li>
        </ul>
      </div>
    </main>


@endsection
