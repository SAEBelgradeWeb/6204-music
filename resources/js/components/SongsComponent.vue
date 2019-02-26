<template>
    <div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Album</th>
                </tr>
                <template v-for="artist in artists">
                    <tr v-for="song in artist.songs">
                    <td>{{song.title}}</td>
                    <td>{{ artist.name}}</td>
                    <td v-if="song.album.cover_art"><img :src="'/storage/albums/' + song.album.cover_art" width="30"></td>
                    </tr>
                </template>
            </table>
            <el-alert
                    title="success alert"
                    type="success"></el-alert>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                'artists': []
            }
        },
        mounted() {
            axios.get('/api/songs')
                .then(response => {
                    this.artists = response.data;
                    this.$message('All songs fetched');
                })
        }
    }
</script>