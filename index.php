<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>To do List</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <h1 class="mb-5 text-center">Todo list
                        <hr>
                    </h1>
                    <ul class="list-unstyled p-2 text-white">             
                        <li v-for="(tasks, index) in todoList" :key="index" >
                          <div class=" d-flex justify-content-between">
                            <div :class="tasks.done ? 'text-decoration-line-through': ''">
                             <div class="list_task" :class="tasks.done ? 'text-decoration-line-through': ''" @click="statusDone(index)">  {{tasks.text}}</div>
                            </div>
                           <div>
                           <button type="button" class="btn btn-success btn-sm me-1  text-end" :class="tasks.done ? 'btn-info' : ''" @click="statusDone(index)" >
                                    <i class="fa-solid fa-check" :class="tasks.done ? 'fa-x' : '' "></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-sm " @click="deleteTask(index)">
                                    <i class="fa-sharp fa-solid fa-trash"></i>
                            </button> 
                           </div>
                          </div>
                            <hr>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" @keyup.enter="updateTask" v-model="newTask" placeholder="new task" class="form-control">
                        <button type="button" @click="updateTask" class="btn btn-success">Aggiungi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type ="text/javascript" src ="./js/script.js"></script>
</body>
</html>