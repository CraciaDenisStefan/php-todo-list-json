const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            todoList: null,
            newTask:'',
        }
    },
    mounted(){
        axios.get(this.apiUrl).then((response) =>{
            this.todoList =response.data;
        })
    },
    methods: {
      updateTask(){
        const data ={
            newTask : this.newTask,

        }

        axios.post(this.apiUrl,data, {
            headers: { 'Content-Type': 'multipart/form-data'}
        }).then((response)=>{
            this.newTask = '';
            this.todoList= response.data;
        })
      } , 
      statusDone(index){
        const data = new FormData();
        data.append('updateTask',index)

        axios.post(this.apiUrl,data).then((response)=>
        this.todoList= response.data)
        
    },
    deleteTask(index){
        const data = new FormData();
        data.append('deleteTask',index)

        axios.post(this.apiUrl,data).then((response)=>
        this.todoList= response.data)
    },
    },

}).mount('#app');