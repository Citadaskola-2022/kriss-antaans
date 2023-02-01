export default {
    template: `
        <div class="bg-gray-800">
            <div class="grid grid-cols-3 gap-6">
                <form @submit.prevent="save">
                    <div>Modelis</div>
                    <input type="text" v-model="form.model" placeholder="Text" />
                    
                    <div>Cena</div>
                    <span style="font-size:20px;"></span> 
                    <input type="number" v-model="form.price" >
                    
                    <div>Veids</div>
                    <select v-model="form.veids">
                        <option disabled value=""></option>
                        <option>Please select one</option>
                        <option>yo</option>
                        <option>nu</option>
                        <option>prr</option>
                        <option>skr</option>
                        <option>nuu</option>
                    </select>
                <button>
                type="submit"
                class="border"
                
                saglabat</button>
                </form>        
                    
                <div class="w-64 text-white">
                    <p>Modelis: {{form.model}}</p>
                    <p>Cena: {{form.price}}</p>
                    <p>Veids: {{form.veids}}</p>
                </div>
            <div class="divide-y">
            <div v-for="item in saved">
                    <p>Modelis: {{form.model}}</p>
                    <p>Cena: {{form.price}}</p>
                    <p>Veids: {{form.veids}}</p>
                </div>
        
        </div>`,
    data(){
        return {
            form: {
                type: '',
                model: '',
                veids: ''
            },
            saved: [
                {
                    type: 'aa ',
                    model: 're ',
                    veids: 'ir'

                }



            ]

    }

},
    methods: {
        save() {
            const item = {
                type: this.form.type,
                model: this.form.model,
                price: this.form.price
            }

            this.saved.unshift(item);
            this.form.type = '';
            this.form.model = '';
            this.form.price = '';



        }
    }
}