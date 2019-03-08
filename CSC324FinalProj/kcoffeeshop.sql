--
-- PostgreSQL database dump
--

-- Dumped from database version 11.0
-- Dumped by pg_dump version 11.0

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: ins_function(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.ins_function() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
BEGIN
  IF tg_op = 'DELETE' THEN
     INSERT INTO backup_emp_tbl(id, fname, mname, lname, role, email, operation)
     VALUES (old.id, old.fname, old.mname, old.lname, old.role, old.email, tg_op);
     RETURN old;
  END IF;
  IF tg_op = 'INSERT' THEN
     INSERT INTO backup_emp_tbl(id, fname, mname, lname, role, email, operation)
     VALUES (new.id, new.fname, new.mname, new.lname, new.role, new.email, tg_op);
     RETURN new;
  END IF;
  IF tg_op = 'UPDATE' THEN
     INSERT INTO backup_emp_tbl(id, fname, mname, lname, role, email, operation)
     VALUES (old.id, old.fname, old.mname, old.lname, old.role, old.email, tg_op);
     RETURN new;
  END IF;
END;
$$;


ALTER FUNCTION public.ins_function() OWNER TO postgres;

--
-- Name: insert_product(integer, character varying, numeric); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.insert_product(id integer, name character varying, hpd numeric) RETURNS void
    LANGUAGE plpgsql
    AS $$
								BEGIN
								INSERT INTO products VALUES (id, name, hpd);
					END
			$$;


ALTER FUNCTION public.insert_product(id integer, name character varying, hpd numeric) OWNER TO postgres;

--
-- Name: norm_supplier(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.norm_supplier() RETURNS trigger
    LANGUAGE plpgsql
    AS $$ BEGIN
	NEW.name := initcap(NEW.name);
	NEW.phone_no := initcap(NEW.phone_no);
	NEW.street := initcap(NEW.street);
	NEW.state := initcap(NEW.state);
	NEW.city := initcap(NEW.city);
	NEW.zipcode := initcap(NEW.zipcode);
	RETURN NEW;
END;

$$;


ALTER FUNCTION public.norm_supplier() OWNER TO postgres;

--
-- Name: totalamount(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.totalamount() RETURNS numeric
    LANGUAGE plpgsql
    AS $$
declare
total numeric(10,2);
BEGIN
SELECT count(*) into total FROM currentordersp;
RETURN total;
END;
$$;


ALTER FUNCTION public.totalamount() OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: backup_emp_tbl; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.backup_emp_tbl (
    id integer,
    fname character varying(20),
    mname character varying(20),
    lname character varying(25),
    role character varying(50),
    email character varying(60),
    operation character varying(25)
);


ALTER TABLE public.backup_emp_tbl OWNER TO postgres;

--
-- Name: category; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.category (
    id integer NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.category OWNER TO postgres;

--
-- Name: category_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.category_id_seq OWNER TO postgres;

--
-- Name: category_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.category_id_seq OWNED BY public.category.id;


--
-- Name: contains; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.contains (
    pid integer,
    oid integer,
    qty integer,
    sprice numeric
);


ALTER TABLE public.contains OWNER TO postgres;

--
-- Name: orders; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.orders (
    id integer NOT NULL,
    payment character varying(255) NOT NULL,
    datetime timestamp without time zone NOT NULL,
    cid integer NOT NULL,
    total numeric(10,2) NOT NULL
);


ALTER TABLE public.orders OWNER TO postgres;

--
-- Name: currentorders; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.currentorders AS
 SELECT orders.id,
    orders.payment,
    orders.datetime,
    orders.cid,
    orders.total
   FROM public.orders
  WHERE (((orders.payment)::text = 'cash'::text) AND (orders.datetime IS NULL));


ALTER TABLE public.currentorders OWNER TO postgres;

--
-- Name: currentordersp; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.currentordersp AS
 SELECT orders.id,
    orders.payment,
    orders.datetime,
    orders.cid,
    orders.total
   FROM public.orders
  WHERE ((orders.payment)::text = 'cash'::text);


ALTER TABLE public.currentordersp OWNER TO postgres;

--
-- Name: customer; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.customer (
    id integer NOT NULL,
    fname character varying(20) NOT NULL,
    mname character varying(20),
    lname character varying(25) NOT NULL,
    email character varying(60) NOT NULL,
    street character varying(100),
    city character varying(50),
    state character varying(3),
    zipcode integer,
    phone_no numeric(11,0)
);


ALTER TABLE public.customer OWNER TO postgres;

--
-- Name: customer_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.customer_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.customer_id_seq OWNER TO postgres;

--
-- Name: customer_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.customer_id_seq OWNED BY public.customer.id;


--
-- Name: employee; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.employee (
    id integer NOT NULL,
    fname character varying(20) NOT NULL,
    mname character varying(20),
    lname character varying(25),
    role character varying(50) NOT NULL,
    email character varying(60) NOT NULL
);


ALTER TABLE public.employee OWNER TO postgres;

--
-- Name: employee_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.employee_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.employee_id_seq OWNER TO postgres;

--
-- Name: employee_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.employee_id_seq OWNED BY public.employee.id;


--
-- Name: has; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.has (
    soid integer NOT NULL,
    stid integer NOT NULL,
    datetime timestamp without time zone NOT NULL
);


ALTER TABLE public.has OWNER TO postgres;

--
-- Name: includes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.includes (
    catid integer NOT NULL,
    pid integer NOT NULL
);


ALTER TABLE public.includes OWNER TO postgres;

--
-- Name: orders_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.orders_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.orders_id_seq OWNER TO postgres;

--
-- Name: orders_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.orders_id_seq OWNED BY public.orders.id;


--
-- Name: prepares; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.prepares (
    eid integer NOT NULL,
    oid integer NOT NULL,
    datetime timestamp without time zone NOT NULL
);


ALTER TABLE public.prepares OWNER TO postgres;

--
-- Name: products; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.products (
    id integer NOT NULL,
    name character varying(255),
    hdp numeric(10,2) NOT NULL
);


ALTER TABLE public.products OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.products_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.products_id_seq OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;


--
-- Name: q1; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q1 AS
 SELECT DISTINCT o.id,
    o.payment
   FROM ((public.orders o
     JOIN public.contains c ON ((c.oid = o.id)))
     JOIN public.products p ON (((p.id = c.pid) AND ((p.name)::text = 'Black Coffee'::text) AND (c.sprice > 3.00))));


ALTER TABLE public.q1 OWNER TO postgres;

--
-- Name: q10; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q10 AS
 SELECT DISTINCT cu.fname AS cust_fname,
    cu.lname AS cust_lname,
    o.payment,
    o.datetime,
    p.name AS product_name,
    c.name AS category_name,
    o.total
   FROM (((((public.customer cu
     JOIN public.orders o ON ((cu.id = o.cid)))
     JOIN public.contains co ON ((co.oid = o.id)))
     JOIN public.products p ON ((p.id = co.pid)))
     JOIN public.includes i ON ((i.pid = p.id)))
     JOIN public.category c ON ((c.id = i.catid)))
  WHERE ((((p.name)::text = 'Cafe Americano'::text) OR (((c.name)::text = 'Snacks'::text) AND ((p.name)::text = 'Apple'::text))) AND (o.total < 8.00))
  ORDER BY c.name;


ALTER TABLE public.q10 OWNER TO postgres;

--
-- Name: supplier; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.supplier (
    id integer NOT NULL,
    name character varying(40) NOT NULL,
    phone_no numeric(11,0),
    street character varying(100),
    state character varying(3),
    city character varying(40),
    zipcode integer
);


ALTER TABLE public.supplier OWNER TO postgres;

--
-- Name: supplies; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.supplies (
    sid integer NOT NULL,
    pid integer NOT NULL,
    qty integer NOT NULL,
    datetime timestamp without time zone NOT NULL
);


ALTER TABLE public.supplies OWNER TO postgres;

--
-- Name: q11; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q11 AS
 SELECT DISTINCT s.id,
    s.name AS supplier_name,
    su.qty,
    p.hdp,
    p.name AS product_name
   FROM ((public.supplier s
     JOIN public.supplies su ON ((s.id = su.sid)))
     JOIN public.products p ON (((su.pid = p.id) AND (NOT (EXISTS ( SELECT su2.datetime
           FROM public.supplies su2
          WHERE ((su2.datetime <> su.datetime) AND (su2.qty < su.qty))))) AND (p.hdp > 2.00) AND (EXISTS ( SELECT p.hdp
           FROM public.products p2
          WHERE (p2.hdp <> p.hdp))))))
  ORDER BY s.id, su.qty, p.name;


ALTER TABLE public.q11 OWNER TO postgres;

--
-- Name: q12; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q12 AS
 SELECT c.lname,
    c.fname
   FROM public.customer c
  WHERE (NOT (EXISTS ( SELECT o.id,
            o.payment,
            o.datetime,
            o.cid,
            o.total
           FROM public.orders o
          WHERE (c.id = o.cid))));


ALTER TABLE public.q12 OWNER TO postgres;

--
-- Name: q13; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q13 AS
 SELECT c.fname,
    c.lname
   FROM public.customer c
  WHERE (EXISTS ( SELECT o.id,
            o.payment,
            o.datetime,
            o.cid,
            o.total
           FROM public.orders o
          WHERE ((o.cid = c.id) AND (o.total >= 10.00))))
  ORDER BY c.fname, c.lname;


ALTER TABLE public.q13 OWNER TO postgres;

--
-- Name: q2; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q2 AS
 SELECT DISTINCT supplier.name,
    supplies.datetime,
    supplies.qty,
    products.name AS products
   FROM ((public.supplier
     JOIN public.supplies ON ((supplier.id = supplies.sid)))
     JOIN public.products ON ((products.id = supplies.pid)))
 LIMIT 5;


ALTER TABLE public.q2 OWNER TO postgres;

--
-- Name: q3; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q3 AS
 SELECT date(orders.datetime) AS date,
    count(orders.total) AS count
   FROM public.orders
  WHERE ((orders.datetime >= '2018-09-28 00:00:00'::timestamp without time zone) AND (orders.datetime <= now()))
  GROUP BY (date(orders.datetime))
  ORDER BY (date(orders.datetime));


ALTER TABLE public.q3 OWNER TO postgres;

--
-- Name: q4; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q4 AS
SELECT
    NULL::integer AS id,
    NULL::character varying(20) AS cust_fname,
    NULL::character varying(25) AS cust_lname,
    NULL::character varying(255) AS payment,
    NULL::timestamp without time zone AS datetime,
    NULL::numeric(10,2) AS total,
    NULL::character varying(40) AS status;


ALTER TABLE public.q4 OWNER TO postgres;

--
-- Name: q5; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q5 AS
SELECT
    NULL::integer AS id,
    NULL::character varying(255) AS payment,
    NULL::timestamp without time zone AS datetime,
    NULL::integer AS cid,
    NULL::numeric(10,2) AS total,
    NULL::character varying(20) AS ename,
    NULL::character varying(20) AS cname,
    NULL::character varying(25) AS lname;


ALTER TABLE public.q5 OWNER TO postgres;

--
-- Name: q6; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q6 AS
 SELECT DISTINCT c.id,
    c.fname AS customer_name,
    c.lname AS customer_lname
   FROM public.customer c
  WHERE (EXISTS ( SELECT o.id,
            o.payment,
            o.datetime,
            o.cid,
            o.total
           FROM public.orders o
          WHERE ((o.cid = c.id) AND (NOT (EXISTS ( SELECT o2.id,
                    o2.payment,
                    o2.datetime,
                    o2.cid,
                    o2.total
                   FROM public.orders o2
                  WHERE ((o2.cid = c.id) AND (o.datetime <> o2.datetime))))))));


ALTER TABLE public.q6 OWNER TO postgres;

--
-- Name: q7; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q7 AS
 SELECT DISTINCT e.id,
    e.fname,
    e.lname,
    e.role
   FROM public.employee e
  WHERE (NOT (EXISTS ( SELECT e2.id,
            e2.fname,
            e2.mname,
            e2.lname,
            e2.role,
            e2.email
           FROM public.employee e2
          WHERE ((e.id <> e2.id) AND ((e.role)::text < (e2.role)::text)))));


ALTER TABLE public.q7 OWNER TO postgres;

--
-- Name: q8; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q8 AS
SELECT
    NULL::integer AS id,
    NULL::character varying(255) AS payment,
    NULL::timestamp without time zone AS datetime,
    NULL::integer AS cid,
    NULL::numeric(10,2) AS total,
    NULL::numeric AS "Sum of Prices";


ALTER TABLE public.q8 OWNER TO postgres;

--
-- Name: q9; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW public.q9 AS
SELECT
    NULL::numeric AS sum,
    NULL::character varying(255) AS pay,
    NULL::character varying(20) AS custf,
    NULL::character varying(25) AS custl;


ALTER TABLE public.q9 OWNER TO postgres;

--
-- Name: status; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.status (
    id bigint NOT NULL,
    status character varying(40)
);


ALTER TABLE public.status OWNER TO postgres;

--
-- Name: status_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.status_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.status_id_seq OWNER TO postgres;

--
-- Name: status_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.status_id_seq OWNED BY public.status.id;


--
-- Name: supplier_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.supplier_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.supplier_id_seq OWNER TO postgres;

--
-- Name: supplier_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.supplier_id_seq OWNED BY public.supplier.id;


--
-- Name: category id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.category ALTER COLUMN id SET DEFAULT nextval('public.category_id_seq'::regclass);


--
-- Name: customer id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.customer ALTER COLUMN id SET DEFAULT nextval('public.customer_id_seq'::regclass);


--
-- Name: employee id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.employee ALTER COLUMN id SET DEFAULT nextval('public.employee_id_seq'::regclass);


--
-- Name: orders id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.orders ALTER COLUMN id SET DEFAULT nextval('public.orders_id_seq'::regclass);


--
-- Name: products id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);


--
-- Name: status id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status ALTER COLUMN id SET DEFAULT nextval('public.status_id_seq'::regclass);


--
-- Name: supplier id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.supplier ALTER COLUMN id SET DEFAULT nextval('public.supplier_id_seq'::regclass);


--
-- Name: category category_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.category
    ADD CONSTRAINT category_id_key UNIQUE (id);


--
-- Name: category category_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.category
    ADD CONSTRAINT category_pkey PRIMARY KEY (id);


--
-- Name: customer customer_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.customer
    ADD CONSTRAINT customer_id_key UNIQUE (id);


--
-- Name: customer customer_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.customer
    ADD CONSTRAINT customer_pkey PRIMARY KEY (id);


--
-- Name: employee employee_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.employee
    ADD CONSTRAINT employee_id_key UNIQUE (id);


--
-- Name: employee employee_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.employee
    ADD CONSTRAINT employee_pkey PRIMARY KEY (id);


--
-- Name: orders orders_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_id_key UNIQUE (id);


--
-- Name: orders orders_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (id);


--
-- Name: products products_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_id_key UNIQUE (id);


--
-- Name: products products_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);


--
-- Name: status status_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status
    ADD CONSTRAINT status_id_key UNIQUE (id);


--
-- Name: status status_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.status
    ADD CONSTRAINT status_pkey PRIMARY KEY (id);


--
-- Name: supplier supplier_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.supplier
    ADD CONSTRAINT supplier_id_key UNIQUE (id);


--
-- Name: supplier supplier_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.supplier
    ADD CONSTRAINT supplier_pkey PRIMARY KEY (id);


--
-- Name: fki_contains_oid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_contains_oid_fkey ON public.contains USING btree (oid);


--
-- Name: fki_contains_pid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_contains_pid_fkey ON public.contains USING btree (pid);


--
-- Name: fki_has_oid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_has_oid_fkey ON public.has USING btree (soid);


--
-- Name: fki_has_stid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_has_stid_fkey ON public.has USING btree (stid);


--
-- Name: fki_includes_catid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_includes_catid_fkey ON public.includes USING btree (catid);


--
-- Name: fki_includes_pid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_includes_pid_fkey ON public.includes USING btree (pid);


--
-- Name: fki_orders_cid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_orders_cid_fkey ON public.orders USING btree (cid);


--
-- Name: fki_pid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_pid_fkey ON public.supplies USING btree (pid);


--
-- Name: fki_prepares_eid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_prepares_eid_fkey ON public.prepares USING btree (eid);


--
-- Name: fki_preparpes_oid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_preparpes_oid_fkey ON public.prepares USING btree (oid);


--
-- Name: fki_sid_fkey; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_sid_fkey ON public.supplies USING btree (sid);


--
-- Name: q5 _RETURN; Type: RULE; Schema: public; Owner: postgres
--

CREATE OR REPLACE VIEW public.q5 AS
 SELECT DISTINCT o.id,
    o.payment,
    o.datetime,
    o.cid,
    o.total,
    e.fname AS ename,
    c.fname AS cname,
    c.lname
   FROM (((public.orders o
     JOIN public.prepares p ON ((p.oid = o.id)))
     JOIN public.customer c ON ((o.cid = c.id)))
     JOIN public.employee e ON ((e.id = p.eid)))
  WHERE ((p.datetime > '2018-09-28 00:00:00'::timestamp without time zone) AND (EXISTS ( SELECT employee.id,
            employee.fname,
            employee.mname,
            employee.lname,
            employee.role,
            employee.email
           FROM public.employee
          WHERE ((e.id = p.eid) AND ((e.fname)::text = 'Haleigh'::text)))))
  GROUP BY o.id, e.id, c.id
  ORDER BY o.id;


--
-- Name: q8 _RETURN; Type: RULE; Schema: public; Owner: postgres
--

CREATE OR REPLACE VIEW public.q8 AS
 SELECT o.id,
    o.payment,
    o.datetime,
    o.cid,
    o.total,
    sum(c.sprice) AS "Sum of Prices"
   FROM (public.contains c
     JOIN public.orders o ON ((o.id = c.oid)))
  WHERE (o.id = 1)
  GROUP BY c.sprice, o.id
  ORDER BY c.sprice, o.id;


--
-- Name: q9 _RETURN; Type: RULE; Schema: public; Owner: postgres
--

CREATE OR REPLACE VIEW public.q9 AS
 SELECT DISTINCT sum(totals.total) AS sum,
    totals.pay,
    totals.custf,
    totals.custl
   FROM ( SELECT o.payment AS pay,
            cu.fname AS custf,
            cu.lname AS custl,
            sum(c.sprice) AS total
           FROM (((public.contains c
             JOIN public.orders o ON ((o.id = c.oid)))
             JOIN public.customer cu ON ((cu.id = o.cid)))
             JOIN public.products p ON ((c.pid = p.id)))
          WHERE (c.oid = 5)
          GROUP BY c.sprice, o.id, p.id, cu.id
          ORDER BY c.sprice, o.id, p.id) totals
  GROUP BY totals.pay, totals.custf, totals.custl;


--
-- Name: q4 _RETURN; Type: RULE; Schema: public; Owner: postgres
--

CREATE OR REPLACE VIEW public.q4 AS
 SELECT DISTINCT o.id,
    c.fname AS cust_fname,
    c.lname AS cust_lname,
    o.payment,
    o.datetime,
    o.total,
    s.status
   FROM (((public.orders o
     JOIN public.has h ON ((h.soid = o.id)))
     JOIN public.status s ON ((s.id = h.stid)))
     JOIN public.customer c ON ((c.id = o.cid)))
  WHERE ((h.datetime > '2018-09-28 00:00:00'::timestamp without time zone) AND (EXISTS ( SELECT d.status
           FROM public.status d
          WHERE ((d.id = h.stid) AND ((d.status)::text = 'Done'::text)))))
  GROUP BY o.id, s.id, c.fname, c.lname
  ORDER BY o.id, c.fname
 LIMIT 10;


--
-- Name: employee audit_ins; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER audit_ins AFTER INSERT OR DELETE OR UPDATE ON public.employee FOR EACH ROW EXECUTE PROCEDURE public.ins_function();


--
-- Name: supplier norm_supplier_trigger; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER norm_supplier_trigger BEFORE INSERT OR UPDATE ON public.supplier FOR EACH ROW EXECUTE PROCEDURE public.norm_supplier();


--
-- Name: contains contains_oid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contains
    ADD CONSTRAINT contains_oid_fkey FOREIGN KEY (oid) REFERENCES public.orders(id);


--
-- Name: contains contains_pid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.contains
    ADD CONSTRAINT contains_pid_fkey FOREIGN KEY (pid) REFERENCES public.products(id);


--
-- Name: has has_oid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.has
    ADD CONSTRAINT has_oid_fkey FOREIGN KEY (soid) REFERENCES public.orders(id);


--
-- Name: has has_stid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.has
    ADD CONSTRAINT has_stid_fkey FOREIGN KEY (stid) REFERENCES public.status(id);


--
-- Name: includes includes_catid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.includes
    ADD CONSTRAINT includes_catid_fkey FOREIGN KEY (catid) REFERENCES public.category(id);


--
-- Name: includes includes_pid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.includes
    ADD CONSTRAINT includes_pid_fkey FOREIGN KEY (pid) REFERENCES public.products(id);


--
-- Name: orders orders_cid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_cid_fkey FOREIGN KEY (cid) REFERENCES public.customer(id);


--
-- Name: prepares prepares_eid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.prepares
    ADD CONSTRAINT prepares_eid_fkey FOREIGN KEY (eid) REFERENCES public.employee(id);


--
-- Name: prepares preparpes_oid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.prepares
    ADD CONSTRAINT preparpes_oid_fkey FOREIGN KEY (oid) REFERENCES public.orders(id);


--
-- Name: supplies supplies_pid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.supplies
    ADD CONSTRAINT supplies_pid_fkey FOREIGN KEY (pid) REFERENCES public.products(id);


--
-- Name: supplies supplies_sid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.supplies
    ADD CONSTRAINT supplies_sid_fkey FOREIGN KEY (sid) REFERENCES public.supplier(id);


--
-- PostgreSQL database dump complete
--

