<?php

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="API Documentation",
 *      description="Laravel OAuth 2.0 RestFUL API",
 *      @OA\Contact(email="ozturkcagla041@gmail.com")
 * )
 * 
*/
/**
* @OA\Post(
* path="/api/register",
*   tags={"Register"},
*   summary="User Register",
*
*   @OA\Parameter(
*      name="name",
*      in="query",
*      required=true,
*      @OA\Schema(
*           type="string"
*      )
*   ),
*   @OA\Parameter(
*      name="email",
*      in="query",
*      required=true,
*      @OA\Schema(
*           type="string"
*      )
*   ),
*   @OA\Parameter(
*      name="password",
*      in="query",
*      required=true,
*      @OA\Schema(
*          type="string"
*      )
*   ),
*   @OA\Response(
*      response=200,
*       description="Success",
*      @OA\MediaType(
*           mediaType="application/json",
*      )
*   )
*)
**/
/**
* @OA\Post(
** path="/api/login",
*   tags={"Login"},
*   summary="User Login",
*
*   @OA\Parameter(
*      name="email",
*      in="query",
*      required=true,
*      @OA\Schema(
*           type="string"
*      )
*   ),
*   @OA\Parameter(
*      name="password",
*      in="query",
*      required=true,
*      @OA\Schema(
*          type="string"
*      )
*   ),
*   @OA\Response(
*      response=200,
*       description="Success",
*      @OA\MediaType(
*           mediaType="application/json",
*      )
*   ),
*   @OA\Response(
*      response=401,
*       description="Unauthenticated"
*   )
*)
**/
/**
     * @OA\Post(
     *      path="/api/address",
     *      tags={"Address"},
     *      summary="Address Create",
     *      description="Returns list of packages",
     *      @OA\Parameter(
    *           name="detail",
    *           in="query",
    *           required=true,
    *           @OA\Schema(
    *                   type="string"
    *               )
    *       ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *          )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      )
     *  )
     */
/**
 * @OA\Put(
 *      path="/api/address/{id}",
 *      tags={"Address"},
 *      summary="Address Update",
 *      description="Returns list of packages detail",
 *      @OA\Parameter(
*           name="detail",
*           in="query",
*           required=true,
*           @OA\Schema(
*                   type="string"
*               )
*       ),
    *      @OA\Response(
    *          response=200,
    *          description="Successful operation",
    *           @OA\MediaType(
    *           mediaType="application/json",
    *          )
    *      ),
    *      @OA\Response(
    *          response=401,
    *          description="Unauthenticated",
    *      )
    *  )
    */


/**
 * @OA\Get(
 *   path="/api/users",
 *   tags={"User"},
 *   summary="User List",
*      @OA\Response(
*          response=200,
*          description="Successful operation",
*           @OA\MediaType(
*           mediaType="application/json",
*          )
*      ),
*      @OA\Response(
*          response=401,
*          description="Unauthenticated",
*      )
 * )
 */
/**
 * @OA\Get(
 *   path="/api/address",
 *   tags={"User"},
 *   summary="User List",
*      @OA\Response(
*          response=200,
*          description="Successful operation",
*           @OA\MediaType(
*           mediaType="application/json",
*          )
*      ),
*      @OA\Response(
*          response=401,
*          description="Unauthenticated",
*      )
 * )
 */
/**
 * @OA\Get(
 *   path="/api/address/{id}",
 *   tags={"User"},
 *   summary="User List",
*   @OA\Parameter(
*      name="id",
*      in="path",
*      required=true,
*      @OA\Schema(
*           type="integer"
*      )
*   ),
*      @OA\Response(
*          response=200,
*          description="Successful operation",
*           @OA\MediaType(
*           mediaType="application/json",
*          )
*      ),
*      @OA\Response(
*          response=401,
*          description="Unauthenticated",
*      )
 * )
 */
/**
     * @OA\Delete(
     ** path="/api/address/{id}",
     *   tags={"Address"},
     *   summary="Address Delete",
     *   operationId="paymentdetails",
     *
     *   @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *          mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=401,
     *       description="Unauthenticated"
     *   )
     *)
     **/