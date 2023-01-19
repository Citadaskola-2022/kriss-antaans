!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <title>Episode 3:Lists, Conditionals, and Computed Properties</title>
    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full grid place-items-center">
<div id="app">
    <section v-show="inProgressAssignments.length">
        <h2 class="font-bold mb-4">
            Assignments
        </h2>
        <ul>
            <li v-for="assignment in inProgressAssignments" :key="assignment.id">
                <label>
                    {{assignment.name}}

                    <input type="checkbox" v-model="assignment.complete">
                </label>
            </li>
        </ul>
    </section>

    <section v-show="completedAssignments.length" class="mt-8">
        <h2 class="font-bold mb-4">
            Completed
        </h2>
        <ul>
            <li v-for="assignment in completedAssignments" :key="assignment.id">
                <label>
                    {{assignment.name}}

                    <input type="checkbox" v-model="assignment.complete">
                </label>
            </li>
        </ul>
    </section>
</div>


<script>
    let app = {
        data() {
            return {
                assignments: [
                    {name:'Finish projects', complete:  false, id:1},
                    {name:'Read chapter 4', complete: false, id:2},
                    {name:'Finish programming homework', complete: false, id:3},
                ]
            }
        },

        computed: {
            inProgressAssignments() {
                return this.assignments.filter(assignment  => ! assignment.complete);
            },
            completedAssignments() {
                return this.assignments.filter(assignment => assignment.complete);
            }
        }
    };

    Vue.createApp(app).mount('#app');
</script>

</body>
</html>