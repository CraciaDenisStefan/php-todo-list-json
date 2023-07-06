const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            todoList: '',
        }
    },
    mounted(){
        axios.get(this.apiUrl).then((response) =>{
            this.todoList =response.data;
        })
    }

}).mount('#app');