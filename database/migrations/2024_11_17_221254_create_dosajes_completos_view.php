<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDosajesCompletosView extends Migration
{
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS vw_DosajesCompletos');

        DB::statement("
            CREATE VIEW vw_DosajesCompletos AS
            SELECT
                d.idDosaje AS idDosaje,
                d.fecha_Dosaje AS fecha_Dosaje,
                d.valorHemoglobina_Dosaje AS valorHemoglobina_Dosaje,
                d.nivelAnemia_Dosaje AS nivelAnemia_Dosaje,
                d.peso_Dosaje AS peso_Dosaje,
                d.talla_Dosaje AS talla_Dosaje,
                d.edadMeses_Dosaje AS edadMeses_Dosaje,
                d.nivelHierro_Dosaje AS nivelHierro_Dosaje,
                d.estadoRecuperacion_Dosaje AS estadoRecuperacion_Dosaje,
                d.fechaRecuperacionReal AS fechaRecuperacionReal,
                h.idHijo AS idHijo,
                h.nombre_Hijo AS nombre_Hijo,
                h.apellido_Hijo AS apellido_Hijo,
                h.fechaNacimiento_Hijo AS fechaNacimiento_Hijo,
                h.sexo_Hijo AS sexo_Hijo,
                h.nombreSeguro_Hijo AS nombreSeguro_Hijo,
                h.idApoderado AS idApoderado,
                doc.idDoctor AS idDoctor,
                doc.nombre_Doctor AS nombre_Doctor,
                doc.apellido_Doctor AS apellido_Doctor,
                doc.celular_Doctor AS celular_Doctor,
                e.idEstablecimiento AS idEstablecimiento,
                e.nombreEstablecimiento AS nombreEstablecimiento,
                dis.idDistrito AS idDistrito,
                dis.nombreDistrito AS nombreDistrito,
                mr.idMicroRed AS idMicroRed,
                mr.nombreMicroRed AS nombreMicroRed,
                p_r.idProvinciaRed AS idProvinciaRed,
                prov.idProvincia AS idProvincia,
                prov.nombreProvincia AS nombreProvincia,
                prov.alturaProvincia AS alturaProvincia,
                red.idRed AS idRed,
                red.nombreRed AS nombreRed,
                p.fechaHora_Prediccion AS fechaHora_Prediccion,
                p.valorHemoglobinaEstimado1_Prediccion AS valorHemoglobinaEstimado1_Prediccion,
                p.valorHemoglobinaEstimado3_Prediccion AS valorHemoglobinaEstimado3_Prediccion,
                p.valorHemoglobinaEstimado6_Prediccion AS valorHemoglobinaEstimado6_Prediccion,
                p.precisionHemoglobina1 AS precisionHemoglobina1,
                p.precisionHemoglobina3 AS precisionHemoglobina3,
                p.precisionHemoglobina6 AS precisionHemoglobina6,
                p.fechaRecuperacionEstimada_Prediccion AS fechaRecuperacionEstimada_Prediccion,
                p.intervencionAdicionalPorcentaje_Prediccion,
                p.intervencionAdicionalMensaje_Prediccion
            FROM
                dbanemiaproyectos1.dosajes d
                JOIN dbanemiaproyectos1.hijos h ON (d.idHijo = h.idHijo)
                JOIN dbanemiaproyectos1.doctores doc ON (d.idDoctor = doc.idDoctor)
                JOIN dbanemiaproyectos1.establecimientos e ON (d.idEstablecimiento = e.idEstablecimiento)
                JOIN dbanemiaproyectos1.distritos dis ON (e.idDistrito = dis.idDistrito)
                JOIN dbanemiaproyectos1.microredes mr ON (dis.idMicroRed = mr.idMicroRed)
                JOIN dbanemiaproyectos1.provincias_redes p_r ON (mr.idProvinciaRed = p_r.idProvinciaRed)
                JOIN dbanemiaproyectos1.provincias prov ON (p_r.idProvincia = prov.idProvincia)
                JOIN dbanemiaproyectos1.redes red ON (p_r.idRed = red.idRed)
                LEFT JOIN dbanemiaproyectos1.predicciones p ON (d.idDosaje = p.idDosaje)
        ");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS vw_DosajesCompletos");
    }
}
