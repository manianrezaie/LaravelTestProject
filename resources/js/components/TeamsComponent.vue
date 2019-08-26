<template>
    <div>
        <div class="row">
            <div class="col-xs-12 col-md-3" v-for="team in teams" :key="team.id">
                <div class="card card-team">
                    <div class="card-body">
                        <img v-bind:src="'storage/images/teams/thumb3-' + team.image" class="img img-thumbnail"/>
                        <div class="text name">{{team.name}}</div>
                        <a @click="showTeam(team.id)" class="text link">مشاهده مشخصات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['countTeam'],
        data() {
            return {
                teams: []
            }
        },
        created() {
            let uri = '/api/teams?c=' + this.countTeam;
            this.axios.get(uri).then(response => {
                this.teams = response.data.data;
            });
        },
        methods: {
            showTeam(tid) {
                this.$router.push({name:'viewTeam',params:{id:tid}})
            }
        }
    }
</script>