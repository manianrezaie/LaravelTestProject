<template>
    <div>
        <div class="row">
            <div class="col-xs-12 col-md-3" v-for="player in players" :key="player.id">
                <div class="card card-team">
                    <div class="card-body">
                        <img v-bind:src="'storage/images/players/thumb3-' + player.image" class="img img-thumbnail"/>
                        <div class="text name">{{player.full_name}}</div>

                        <a @click="showPlayer(player.id)" class="text link">مشاهده مشخصات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['countPlayer'],
        data() {
            return {
                players: []
            }
        },
        created() {
            let uri = '/api/players?c=' + this.countPlayer;
            this.axios.get(uri).then(response => {
                this.players = response.data.data;
            });
        },
        methods: {
            showPlayer(pid) {
                this.$router.push({name:'viewPlayer',params:{id:pid}})
            }
        }
    }
</script>